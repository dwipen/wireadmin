<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;

class Register extends Component
{
    public function render()
    {
        return view('auth.register')->layout('layouts.master');
    }
}
