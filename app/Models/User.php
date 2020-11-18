<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Profile;
use Lab404\Impersonate\Models\Impersonate;
use Lab404\AuthChecker\Models\HasLoginsAndDevices;
use Lab404\AuthChecker\Interfaces\HasLoginsAndDevicesInterface;
use Spatie\Activitylog\Traits\LogsActivity;
use App\Events\UserCreated;

class User extends Authenticatable implements HasLoginsAndDevicesInterface
{
    use HasFactory, Notifiable, HasRoles, Impersonate, HasLoginsAndDevices, LogsActivity;

    protected $guard_name = 'web';
    protected $redirectTo = '/dashboard';
    protected static $logAttributes = ['name', 'email', 'password', 'status'];

    public $dispatchesEvents = [
       'created' => UserCreated::class,
    ];

   /*
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'remember_token',
        'register_ip',
        'login_ip',
        'phone',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * permission needs to impersonate others
     * @return boolean
     */

    public function canImpersonate()
    {
      return \Auth::user()->hasPermissionTo('impersonate-user');
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'topup_date',
    ];

    public function profile()
    {
        return $this->hasOne(Profile::class)->withDefault();
    }
    /**
     * adminlte user image function
     * @param string $value [description]
     */
    public function adminlte_image()
    {
      return \Auth::user()->avatar;
    }

    /**
     * adminlte user description
     * @return string
     */
    public function adminlte_desc()
    {
       return ucfirst(trans('profile.userid')).": ".\Auth::id();
    }

    public function adminlte_profile_url()
    {
       return route('profile', [ 'id' => \Auth::user() ]);
    }

}
