<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use App\Models\User;

class SampleChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $users = User::role('member')->count();

        $active = User::role('member')->whereStatus('active')->count();
        $pending = User::role('member')->whereStatus('pending')->count();
        $temporary = User::role('member')->whereStatus('temporary')->count();
        $suspended = User::role('member')->whereStatus('suspended')->count();

        return Chartisan::build()
            ->labels(['Active', 'Pending', 'Temporary', 'Suspended'])
            ->dataset('Users', [$active, $pending, $temporary, $suspended]);
    }
}
