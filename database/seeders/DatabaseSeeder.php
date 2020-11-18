<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

       foreach (config('permissions.roles') as $key => $role) {
           if (!Role::whereName($role)->exists()) {
              Role::create(['name'=>trim($role)]);
           }
       }

       foreach (config('permissions.permissions') as $permission => $roles) {
          if (!Permission::whereName(trim($permission))->exists()) {
             Permission::create(['name'=>trim($permission)]);

             foreach ($roles as $key => $role) {
                if ($role = Role::whereName(trim($role))->first()) {
                   $role->givePermissionTo(trim($permission));
                }
             }
          }
       }

        $admin = User::create([
            'id' => 1000,
            'name' => 'Admin',
            'phone' => 6361563439,
            'password' => 'admin',
            'register_ip' => request()->ip(),
            'status' => 'active',
        ]);

      $admin->assignRole('super-admin');

      $master = User::create([
          'id' => 1001,
          'name' => 'master',
          'phone' => 6361563439,
          'email' => 'ffegu0617@gmail.com',
          'register_ip' => request()->ip(),
          'status' => 'active',
          'password' => 'master',
      ]);
      $master->assignRole('member');

    }
}
