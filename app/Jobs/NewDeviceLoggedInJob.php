<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Notifications\NewDeviceLoggedInNotification;
use App\Models\User;

class NewDeviceLoggedInJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $user, $device;
    public function __construct($device)
    {
        $this->user = User::find($device->user_id);
        $this->device = $device;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
       $this->user->notify((new NewDeviceLoggedInNotification($this->device)));
    }
}
