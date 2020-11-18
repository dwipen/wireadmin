<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\User;

class LatestMembers extends Component
{
    public $latest_members = [];
    public function render()
    {
        return view('dashboard.latest-members');
    }

    public function mount()
    {
       $this->latest_members = User::role('member')->latest()->take(8)->get();
    }
}
