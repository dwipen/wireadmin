<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Listeners\SendNewDeviceLoggedInNotification;
use App\Listeners\SendRegisterCompletedNotification;
use App\Listeners\SendProfileUpdatedNotification;
use App\Listeners\SendEpinGeneratedNotification;
use App\Listeners\DispatchUpdateUsersTableJobs;
use App\Listeners\SendWalletBalanceNotification;
use App\Listeners\SendBalanceDeductedNotification;
use App\Listeners\SendBalanceAddedNotification;
use App\Listeners\UserCreatedListener;
use App\Listeners\OrderCreatedListener;
use Lab404\AuthChecker\Events\DeviceCreated;
use App\Events\ProfileUpdated;
use App\Events\UserCreated;
use App\Events\RegisterCompleted;
use App\Events\EpinGenerated;
use App\Events\UpdateUsersTable;
use App\Events\WalletSaved;
use App\Events\OrderCreated;
use App\Events\WalletHistoryCreated;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [

        UserCreated::class => [
            UserCreatedListener::class,
        ],
        DeviceCreated::class => [
            SendNewDeviceLoggedInNotification::class,
        ],
        ProfileUpdated::class => [
            SendProfileUpdatedNotification::class,
        ],
        RegisterCompleted::class=>[
            SendRegisterCompletedNotification::class,
        ],
        EpinGenerated::class=>[
            SendEpinGeneratedNotification::class,
        ],
        UpdateUsersTable::class=>[
            DispatchUpdateUsersTableJobs::class,
        ],
        WalletSaved::class=>[
            SendWalletBalanceNotification::class,
        ],
        WalletHistoryCreated::class=>[
            SendBalanceDeductedNotification::class,
            SendBalanceAddedNotification::class,
        ],
        OrderCreated::class => [
           OrderCreatedListener::class,  
        ],

    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
