<?php

namespace App\Services;

use App\User;

class PermissionService
{
    public function check(?User $user, $name) :bool
    {
        if (! $user) {
            return false;
        }

        return $user->permissions->where('name', $name)->count();
    }
}
