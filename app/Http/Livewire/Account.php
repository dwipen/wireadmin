<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Profile;
use App\Models\User;
use Livewire\WithFileUploads;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Account extends Component
{
    use AuthorizesRequests, WithFileUploads;
    public $modal, $prefix="user", $status, $avatar;

    public User $user;

    public $profile=[];

    public $buttons = [
      'edit-profile' => ['method'=>'editProfile', 'class'=>'info'],
      'save' => ['method'=>'save', 'class'=>'success'],
    ];

    public $userInputs = [
       'id'  => ['type'=>'disabled'],
       'status'  => ['type'=>'select', 'options'=>['pending', 'active', 'temporary', 'suspended'], 'can'=>'manage-profiles'],
       'role'  => ['type'=>'select', 'options'=>['member', 'admin', 'super-admin'], 'can'=>'manage-profiles'],
       'name'  => ['type'=>'text'],
       'email'  => ['type'=>'email'],
       'avatar'  => ['type'=>'file'],
       'new-password'  => ['type'=>'password'],
       'password-confirm'  => ['type'=>'password'],
    ], $inputs=[];

    public $rules = [
        'user.id'  => 'required',
        'user.status'  => 'required',
        'user.name'  => 'required|string',
        'user.email'  => 'email',
        'user.new-password' => 'string|min:6',
        'user.password-confirm' => 'string|min:6',
    ];

    public function mount()
    {
      $this->user = User::findOrFail(request()->id);
      $this->editAccount();
    }

    public function render()
    {
       $this->authorize('viewAny', [User::class, $this->user]);
        return view('account');
    }

    public function editProfile()
    {
      $this->prefix = 'profile';
       $this->inputs = [
          'id' => [ 'type' => 'disabled' ],
          'user_id' => [ 'type' => 'disabled' ],
       ];
       foreach (setting('register.fields') as $key => $value) {
          if ($value) {
             $this->inputs[$key] = [ 'type' => 'text' ];
             $this->profile[$key] = $this->user->profile[$key];
          }
       }
       foreach ($this->inputs as $key => $value) {
         $this->profile[$key] = $this->user->profile[$key];
       }
       unset($this->buttons['edit-profile']);
       $this->buttons['edit-account'] = ['method'=>'editAccount', 'class'=>'info'];
    }

    public function editAccount()
    {
       $this->prefix = 'user';
       $this->inputs = $this->userInputs;
       unset($this->buttons['edit-account']);
       if ($this->user->id===1000) {
          unset($this->buttons['edit-profile']);
       }else {
         $this->buttons['edit-profile'] = ['method'=>'editProfile', 'class'=>'info'];
       }

       if ($this->user->id === \Auth::id()) {
         unset($this->inputs['status']);
       }else {
         $this->status = $this->user->status;
       }
    }


    public function save()
    {
       $this->emit('hideLoading');
       if ($this->avatar) {
          $this->validate([ 'avatar' => 'image|max:2048' ]);
          $this->user->avatar = '/storage/'.$this->avatar->storeAs('uploads/profiles', $this->user->id.trim(now()).'.png', 'public');
       }
       $this->validate();
       $this->authorize('update', $this->user);
       if ($this->prefix==='user') {
         if (!empty($this->user['new-password'])) {
             if ($this->user['new-password']!==$this->user['password-confirm']) {
               return $this->addError('user.password-confirm', trans('messages.not-matched', ['attr' => 'password']));
             }
             $this->user->password = \Hash::make($this->user['new-password']);
         }

         if (!empty($this->user['role'])) {
            $this->user->assignRole($this->user->role);
            unset($this->user['role']);
         }

         unset($this->user['new-password']);
         unset($this->user['password-confirm']);

         if ($this->user->save()) {
           if ($this->user->id === \Auth::id()) {
              session()->flash('succes', ucfirst(trans('messages.saved', ['attr'=>'user account'])));
              $this->redirectRoute('profile', ['id'=>$this->user->id]);
           }
            return $this->emit('success', ucfirst(trans('messages.saved', ['attr'=>'user account'])));
         }
       }
       elseif ($this->prefix==='profile') {
         $this->authorize('update', $this->user);
         $updatables = [];
         foreach (setting('register.fields') as $key => $value) {
           if ($value) {
             $updatables[$key] = $this->profile[$key];
           }
         }
         if (Profile::findOrFail($this->profile['id'])->update($updatables)) {
           if ($this->profile['user_id'] === \Auth::id()) {
              session()->flash('succes', ucfirst(trans('messages.saved', ['attr'=>'user profile'])));
              $this->redirectRoute('profile', ['id'=>$this->profile['user_id']]);
           }
           return $this->emit('success', ucfirst(trans('messages.saved', ['attr'=>'user profile'])));
         }
       }
       return $this->emit('error', ucfirst(trans('messages.not-saved', ['attr'=>'user'])));

    }

}
