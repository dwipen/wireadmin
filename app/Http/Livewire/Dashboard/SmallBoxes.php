<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\User;

class SmallBoxes extends Component
{
    public $boxes = [
       'total_users' => [ 'class'=>'info', 'icon'=>'fas fa-users' ],
       'active_users' => [ 'class'=>'success', 'icon'=>'fas fa-users' ],
       'total_earnings' => [ 'class'=>'warning', 'icon'=>'fas fa-money-bill', 'small'=>'currency' ],
       'member_earnings' => [ 'class'=>'danger', 'icon'=>'fas fa-money-bill', 'small'=>'currency' ],
    ], $prefix='dashboard';

    public function render()
    {
        $data['total_users'] = User::role('member')->count();
        $data['active_users'] = User::role('member')->whereStatus('active')->count();

        $data['total_earnings'] = User::sum('topup');
        $data['member_earnings'] = 12002;

        return view('dashboard.small-boxes', ['data'=>$data]);
    }

    public function mount()
    {
      # code...
    }
}
