<?php

namespace App\Services;

use App\User;

class PermissionService
{
    public function check(User $user, $name) :bool
    {
        return $user->permissions->where('name', $name)->count();
    }
}
