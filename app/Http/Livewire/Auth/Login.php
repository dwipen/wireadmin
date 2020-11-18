<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Login extends Component
{

    public $userid, $password, $remember=false;
    protected $rules = [
      'userid' => 'required|numeric',
      'password' => 'required'
    ];

    public function mount()
    {

    }

    public function render()
    {
        return view('auth.login')->layout('layouts.master');
    }

    public function login()
    {
      $this->emit("hideLoading");
      $this->validate();
      if (\Auth::attempt(['id' => $this->userid, 'password'=>$this->password], $this->remember)) {
        $this->emit('success', ucfirst(trans('auth.messages.success', [ 'attr'=>'Signin' ])));
        return redirect()->intended('dashboard');
      }
      $this->emit('error', ucfirst(trans('auth.failed')));
      $this->addError('userid', ucfirst(trans('auth.failed')));
    }
}
