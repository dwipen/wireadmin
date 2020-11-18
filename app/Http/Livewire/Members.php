<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Repositories\UserRepository;

class Members extends Component
{
    use WithPagination, AuthorizesRequests;

    public $requests = ['search', 'page', 'paginate', 'status'];

    public $selectStatus = ['active', 'pending', 'temporary', 'suspended'];

    public $status, $modal=true, $update, $create, $prefix="user", $paginate = 25, $search, $page=1;

    protected $queryString = [
        'status',
        'paginate',
        'search' => ['except' => ''],
        'page' => ['except' => 1],
    ], $paginationTheme = 'bootstrap';

    public $rows = ['id', 'name','phone', 'email', 'status'];

    public $cardButtons = [
        'add' => [ 'class' => 'info', 'method' => 'add' ],
    ];

    public $headerButtons = [
        'export' => [ 'class' => 'info btn-sm', 'method' => 'export' ],
    ];

    public $modalButtons = [
       'save' => [ 'method'=> 'save', 'class'=>'success'],
    ];

    public $inputs = [], $user=[];

    protected $rules = [];

    public $actions = [
       'edit' => [ 'class' => 'info', 'icon'=>'fas fa-edit', 'method' => 'edit', 'can'=>'manage-members' ],
       'login' => [ 'class' => 'danger', 'icon'=>'fas fa-sign-in-alt', 'method' => 'login', 'can'=>'impersonate-user' ],
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

    public function updatingStatus()
    {
      $this->resetPage();
    }

    public function render(UserRepository $repository)
    {
        return view('members', [
          'data' => $repository->all($this->status, $this->search, $this->paginate)
        ]);
    }

    public function add()
    {
       $this->redirectRoute('register', ['sponsor'=>1001]);
    }

    public function edit($id)
    {
       $this->authorize('view', User::findOrFail($id));
       $this->redirectRoute('profile', ['id'=>$id]);
    }

    public function login(User $user)
    {
       $this->authorize('login', User::class);
       \Auth::user()->impersonate($user);
       $this->redirectRoute('dashboard');
    }

}
