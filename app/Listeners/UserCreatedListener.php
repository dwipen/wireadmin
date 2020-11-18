<?php

namespace App\Listeners;

use App\Events\UserCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Profile;

class UserCreatedListener
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
     * @param  UserCreated  $event
     * @return void
     */
    public function handle(UserCreated $event)
    {
        if ($user = $event->user) {
           $profile = Profile::create([ 'user_id' => $user->id ]);
           if ($user->id !==1000) {
             $user->assignRole('member');
           }
           $user->password = \Hash::make($user->password);
           $user->save();
        }
    }

}
