<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    public function isAdmin(User $user){
      return $user->email == 'rutulsheladiya2731@gmail.com';
    }
}
