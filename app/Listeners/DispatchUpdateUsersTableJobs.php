<?php

namespace App\Listeners;

use App\Events\UpdateUsersTable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
USE App\Jobs\CountLegsJob;

class DispatchUpdateUsersTableJobs
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UpdateUsersTable  $event
     * @return void
     */
    public function handle(UpdateUsersTable $event)
    {
        dispatch(new CountLegsJob());
    }
}
