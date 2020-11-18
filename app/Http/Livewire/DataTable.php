<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Role;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Repositories\RoleRepository;

class DataTable extends Component
{
    use WithPagination, AuthorizesRequests;

    public $requests = ['search', 'page', 'paginate'], $paginationTheme = 'bootstrap';

    public $modal=true, $update, $create, $prefix="role", $paginate = 25, $search, $page=1;

    protected $queryString = [ 'paginate', 'search' => ['except' => ''], 'page' => ['except' => 1] ];

    public $rows = [];

    public $headerButtons = [
        // 'export' => [ 'class' => 'warning btn-sm', 'method' => 'export' ],
    ];

    public $cardButtons = [
        // 'create' => [ 'class' => 'info btn-sm', 'method' => 'create' ],
    ];

    public $modalButtons = [
       'save' => [ 'method'=> 'save', 'class'=>'success'],
    ], $modalClass="modal-md";

    public $inputs = [], $role=[];

    protected $rules = [];

    public $actions = [
       // 'edit' => [ 'class' => 'info', 'icon'=>'fas fa-edit', 'method' => 'edit' ],
       // 'delete' => [ 'class' => 'danger', 'icon'=>'fas fa-trash', 'method' => 'delete', 'confirm'=>true ],
    ];

    public $confirm = ['delete'=>null];

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

    public function updatingStatus()
    {
      $this->resetPage();
    }

    public function render(RoleRepository $repository)
    {
        $this->authorize('viewAny', Role::class);

        return view('roles', [
          'data' => $repository->all($this->status, $this->search, $this->paginate)
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
       $this->create = false;
       $this->update = true;
       $this->role = $role;
       $this->emit('showModal');
    }

    public function mapInputsAndModels()
    {
       $this->role=[];
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
        return $this->emit("error", ucfirst(trans('messages.deleted', ['attr'=>'role'])));
      }
      $this->confirm['delete'] = $role->id;
    }

    public function save()
    {
      $this->emit('hideLoading');
      $this->validate();

      if ($this->update && !$this->create) {
        $this->authorize('update', $role);
        $this->emit('success', ucfirst(trans('messages.saved', ['attr' => 'roles'])));
        return $this->hideModal();
      }

      if ($this->create && !$this->update) {
        $this->authorize('create', Role::class);
        $this->emit('success', ucfirst(trans('messages.saved', ['attr' => 'roles'])));
        return $this->hideModal();
      }

      $this->emit('error', ucfirst(trans('messages.not-saved', ['attr'=>'roles'])));
    }

    public function hideModal()
    {
      $this->update = false;
      $this->create = false;
      $this->emit('hideModal');
    }


}
