<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{

   public function all($status, $search, $paginate)
   {
       if (empty($status) && isset($search)) {
         return User::role('member')->where('id', 'LIKE', "%$search%")
                         ->orWhere(function($q) use($search){
                            $q->role('member')->where('name', 'LIKE', "%$search%");
                         })
                         ->orWhere(function($q) use($search){
                            $q->role('member')->where('phone', 'LIKE', "%$search%");
                         })
                         ->with('profile')
                         ->paginate($paginate);
       }else {
         return User::role('member')->whereStatus($status)->where('id', 'LIKE', "%$search%")
                       ->orWhere(function($q) use($search, $status){
                          $q->role('member')->whereStatus($status)->where('name', 'LIKE', "%$search%");
                       })
                       ->orWhere(function($q) use($search, $status){
                          $q->role('member')->whereStatus($status)->where('phone', 'LIKE', "%$search%");
                       })
                       ->with('profile')
                       ->paginate($paginate);
       }
   }

   public function create($data, $payment_id=null, $epin=null)
   {
        if ($data) {
            if ($user = $this->createUser($data)) {
              return $user;
            }
        }
        return false;
   }

   private function createUser($data)
   {
       $user = User::create([
           'name' => $data['name'],
           'email' => $data['email'],
           'phone' => $data['phone'],
           'password' => $data['password'],
           'phone' => $data['phone'],
           'register_ip' => request()->ip(),
       ]);

       foreach (setting('register.fields') as $key => $value) {
          $value ? $user->profile[$key] = isset($data[$key]) ? $data[$key] : null : false;
       }
       $user->profile->save();

       return $user;
   }




}
