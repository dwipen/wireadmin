<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Form extends Component
{

    public $modal, $prefix;

    public User $user;

    public $buttons = [
      'save' => ['method'=>'save', 'class'=>'success'],
    ];

    public $inputs = [];

    public function mount()
    {
      $this->fill(request()->only('prefix'));
    }

    public function render()
    {
        return view('form');
    }

    public function save()
    {
       $this->emit('hideLoading');
       $this->validate();

       return $this->emit('success', ucfirst(trans('messages.saved', ['attr'=>'user'])));
    }

}
