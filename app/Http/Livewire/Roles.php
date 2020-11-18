<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Roles extends Component
{
    use WithPagination, AuthorizesRequests;

    public $requests = ['search', 'page', 'paginate'];

    public $modal=true, $update, $create, $prefix="role", $paginate = 25, $search, $page=1;

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

    public $actions = [
       'edit' => [ 'class' => 'info', 'icon'=>'fas fa-edit', 'method' => 'edit' ],
       'delete' => [ 'class' => 'danger', 'icon'=>'fas fa-trash', 'method' => 'delete', 'confirm'=>true ],
    ];

    public $confirm = ['delete'=>null];

    public $inputs = [
      'name' => ['type'=>'text'],
      'guard_name' => ['type'=>'select', 'options'=>['select', 'web', 'api']],
    ], $role=[];

    protected $rules=[
      'role.name' => 'required',
      'role.guard_name' => 'required'
    ];

    public function mount()
    {
       $this->fill(request()->only($this->requests));
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

        $data = Role::where('name', 'like', "%$search%")
                      ->orWhere(function($q) use($search){
                         $q->where('guard_name', 'like', "%$search%");
                      })
                      ->with('permissions')
                      ->paginate($this->paginate);

        return view('roles', [
          'data' => $data
        ]);
    }

    public function create()
    {
      $this->authorize('create', Role::class);
        $this->create = true;
        $this->update = false;
        $this->mapInputsAndModels();
        $this->emit('showModal');
    }
    public function edit(Role $role)
    {
      $this->authorize('update', $role);
       if ($role->name==='super-admin') {
         $this->emit("error", ucfirst(trans('messages.failed', ['attr'=>'role can not be  editted or deleted'])));
       }else {
         $this->update = true;
         $this->create = false;
         $this->role = $role;
         $this->emit('showModal');
       }

    }

    public function mapInputsAndModels()
    {
       foreach ($this->inputs as $key => $value) {
          $this->role[$key] = '';
       }
    }

    public function delete(Role $role)
    {
      $this->authorize('delete', $role);
      if ($this->confirm['delete'] === $role->id) {
         if ($role->delete()) {
            return $this->emit("success", ucfirst(trans('messages.deleted', ['attr'=>'role'])));
          }
        return $this->emit("error", ucfirst(trans('messages.failed', ['attr'=>'role delete'])));
      }
      $this->confirm['delete'] = $role->id;
    }

    public function save()
    {
      $this->emit('hideLoading');
      $this->validate();

       if ($this->update) {
         if (Role::where('id', '!=', $this->role->id)->whereName($this->role['name'])->first()) {
            return $this->addError('role.name', 'role name is already exists.');
         }
         $this->authorize('update', $this->role);
         if ($this->role->save()) {
           $this->emit("hideModal");
            return $this->emit("success", ucfirst(trans('messages.saved', ['attr'=>'role'])));
         }
       }
       elseif ($this->create) {
         $this->authorize('create', Role::class);
         if (Role::whereName($this->role['name'])->first()) {
            return $this->addError('role.name', 'role name is already exists.');
         }
         if (Role::create([ 'name' => $this->role['name'], 'guard_name' => $this->role['guard_name']])) {
           $this->emit("hideModal");
            return $this->emit("success", ucfirst(trans('messages.saved', ['attr'=>'saved'])));
         }
       }

       return $this->emit("error", ucfirst(trans('messages.failed', ['attr'=>'role save'])));
    }


}
