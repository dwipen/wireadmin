<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Dashboard\Dashboard;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Members;
use App\Http\Livewire\Account;
use App\Http\Livewire\Permissions;
use App\Http\Livewire\Roles;
use App\Http\Livewire\Settings;
use App\Http\Livewire\SystemUpdate;

Route::get('', function(){
   return redirect()->route('dashboard');
});

Route::get('install', function(){
    \Artisan::call('migrate:refresh --seed');
    \Artisan::call('storage:link');
});

Route::group(['middleware' => 'guest'], function(){
  Route::get('login', Login::class)->name('login');
  Route::get('password/forgot', ForgotPassword::class)->name('password.forgot');
  Route::get('password/reset', ResetPassword::class)->name('password.reset');
});

Route::get('register', Register::class)->name('register');

Route::group(['middleware' => 'auth'], function(){
  Route::post('logout', function(){
    \Auth::logout();
    return redirect()->route('login');
  });
  Route::get('unimpersonate', function(){
    \Auth::user()->leaveImpersonation();
    return redirect()->route('dashboard');
  })->name('unimpersonate');

  Route::get('dashboard', Dashboard::class)->name('dashboard');

  Route::get('settings/{prefix}', Settings::class)->name('settings')->middleware('permission:manage-settings');

  Route::get('members', Members::class)->name('members')->middleware('permission:manage-members');
  Route::get('profile/{id}', Account::class)->name('profile');

  Route::get('admin/permissions', Permissions::class)->name('permissions')->middleware('permission:manage-administrator');
  Route::get('admin/roles', Roles::class)->name('roles')->middleware('permission:manage-administrator');
  Route::get('admin/system-update', SystemUpdate::class)->name('system.update')->middleware('permission:manage-administrator');

});
