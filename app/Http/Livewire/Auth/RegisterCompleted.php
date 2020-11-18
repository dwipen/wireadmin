<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;

class RegisterCompleted extends Component
{
    public User $user;
    public $password;

    public function mount()
    {
       if (!\Session::has('key')) {
          $this->redirectRoute('register');
       }
       $this->fill(request()->only(['password']));
       $this->user = User::findOrFail(request()->user);
    }
    public function render()
    {
        return view('auth.register-completed')->layout('layouts.master');
    }
}
