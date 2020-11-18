<?php

namespace App\Listeners;

use Lab404\AuthChecker\Events\DeviceCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Jobs\NewDeviceLoggedInJob;

class SendNewDeviceLoggedInNotification
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
     * @param  DeviceCreated  $event
     * @return void
     */
    public function handle(DeviceCreated $event)
    {
        dispatch(new NewDeviceLoggedInJob($event->device));
    }
}
