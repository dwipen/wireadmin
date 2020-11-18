<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\User;

class Reports extends Component
{
    public function render()
    {
        $data['total_users'] = User::role('member')->count();
        $data['active'] = User::role('member')->whereStatus('active')->count() ? User::role('member')->whereStatus('active')->count() : 0 ;
        $data['pending'] = User::role('member')->whereStatus('pending')->count() ? User::role('member')->whereStatus('pending')->count() : 0;
        $data['temporary'] = User::role('member')->whereStatus('temporary')->count() ? User::role('member')->whereStatus('temporary')->count() : 0;
        $data['suspended'] = User::role('member')->whereStatus('suspended')->count() ?  User::role('member')->whereStatus('suspended')->count() : 0;
        $data['topup'] = 10;
        $data['members_earning'] = 1000;
        $data['orders'] = 78;

        return view('dashboard.reports', ['data' => $data]);
    }
}
