<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Permissions extends Component
{
    use WithPagination, AuthorizesRequests;

    public $requests = ['search', 'page', 'paginate'];

    public $modal=true, $update, $create, $prefix="permission", $paginate = 25, $search, $page=1;

    protected $queryString = [
        'paginate',
        'search' => ['except' => ''],
        'page' => ['except' => 1],
    ], $paginationTheme = 'bootstrap';

    public $rows = [ 'id', 'name', 'guard_name' ];

    public $cardButtons = [
        'create' => [ 'class' => 'info', 'method' => 'create' ],
    ];

    public $headerButtons = [
        'export' => [ 'class' => 'warning btn-sm', 'method' => 'export' ],
    ];

    public $modalButtons = [
       'save' => [ 'method'=> 'save', 'class'=>'success'],
    ];

    public $createInputs = [
      'name' => [ 'type' => 'text' ],
      'guard_name' => [ 'type' => 'select', 'options'=>[ 'select', 'web', 'api' ] ],
      'roles' => ['type'=>'select-tag', 'options' => [] ]
    ], $inputs=[], $permission=[], $roleNames=[];

    protected $rules = [
      'permission.name' => 'required|string',
      'permission.guard_name' => 'required|string|in:web,api',
      'permission.roles' => '',
    ];

    public $actions = [
       'edit' => [ 'class' => 'info', 'icon'=>'fas fa-edit', 'method' => 'edit' ],
       'delete' => [ 'class' => 'danger', 'icon'=>'fas fa-trash', 'method' => 'delete', 'confirm'=>true ],
    ];

    public $confirm = ['delete'=>null];

    public function mount()
    {
       $this->fill(request()->only($this->requests));

       $roles = Role::all();
       foreach ($roles as $key => $role) {
         array_push($this->roleNames, $role->name);
       }

    }

    public function updatingSearch()
    {
      $this->resetPage();
    }
    public function updatingPaginate()
    {
      $this->resetPage();
    }

    public function render()
    {
        $search = $this->search;

        $data = Permission::where('name', 'LIKE', "%$search%")
                            ->orWhere(function($q) use($search){
                              $q->where('guard_name', 'LIKE', "%$search%");
                            })
                            ->paginate($this->paginate);

        return view('permissions', [
          'data' => $data
        ]);
    }

    public function create()
    {
       $this->create = true;
       $this->update = false;
       $this->mapInputsAndModels();
       $this->inputs['roles']['options'] = $this->roleNames;
       $this->emit('showModal');
    }

    public function edit(Permission $permission)
    {
       $this->authorize('update', $permission);
       $this->create = false;
       $this->update = true;
       $this->inputs = $this->createInputs;
       $this->inputs['roles']['options'] = $this->roleNames;
       $this->permission = $permission;
       $this->emit('showModal');
    }

    public function mapInputsAndModels()
    {
      $this->permission = [];
      $this->inputs = $this->createInputs;
       foreach ($this->inputs as $key => $value) {
          $this->permission[$key] = '';
       }
    }

    public function delete(Permission $permission)
    {
      $this->authorize('delete', $permission);
      if ($this->confirm['delete'] === $permission->id) {
         if ($permission->delete()) {
            return $this->emit("success", ucfirst(trans('messages.deleted', ['attr'=>'permission'])));
          }
        return $this->emit("error", ucfirst(trans('messages.deleted', ['attr'=>'permission'])));
      }
      $this->confirm['delete'] = $permission->id;
    }

    public function save()
    {
        $this->emit('hideLoading');
        $this->validate();
        $roles = $this->permission['roles'];
        unset($this->permission['roles']);
        if ($this->update) {
          $this->authorize('update', $this->permission);
          if (Permission::where('id', '!=', $this->permission->id)->whereName($this->permission['name'])->first()) {
            return $this->addError('permission.name', ucfirst(trans('messages.exists', ['attr'=>'permission'])));
          }
          if ($this->permission->save()) {

            foreach ($this->permission->roles as $key => $role) {
              $role->revokePermissionTo($this->permission->name);
            }

            if ($super = Role::whereName('super-admin')->first()) {
              $super->givePermissionTo($this->permission['name']);
            }

            if ($roles) {
               foreach ($roles as $key => $role) {
                  if ($role= Role::whereName($role)->first()) {
                     $role->givePermissionTo($this->permission['name']);
                  }
               }
            }
             $this->emit("hideModal");
             return $this->emit("success", ucfirst(trans('messages.saved', ['attr'=>'permission'])));
          }
        }
        elseif ($this->create) {
          $this->authorize('create', Permission::class);
          if (Permission::whereName(trim($this->permission['name']))->first()) {
            return $this->addError('permission.name', ucfirst(trans('messages.exists', ['attr'=>'permission'])));
          }
          if (Permission::create($this->permission)) {
            if ($super = Role::whereName('super-admin')->first()) {
               $super->givePermissionTo($this->permission['name']);
            }
            if ($roles) {
               foreach ($roles as $key => $role) {
                  if ($role= Role::whereName($role)->first()) {
                     $role->givePermissionTo($this->permission['name']);
                  }
               }
            }
            $this->emit("hideModal");
             return $this->emit("success", ucfirst(trans('messages.saved', ['attr'=>'permission'])));
          }
        }

        return $this->emit("error", ucfirst(trans('messages.not-saved', ['attr'=>'permission'])));

    }


}
