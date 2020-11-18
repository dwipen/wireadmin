<?php

namespace App\Listeners;

use App\Events\ProfileUpdated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Jobs\ProfileUpdatedJob;

class SendProfileUpdatedNotification
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
     * @param  ProfileUpdated  $event
     * @return void
     */
    public function handle(ProfileUpdated $event)
    {
        dispatch(new ProfileUpdatedJob($event->user_id));
    }
}
