<?php

namespace App\Policies;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SettingPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return isAdmin();
    }


    public function view(User $user, Setting $Setting): bool
    {
        return isAdmin();

    }


    public function create(User $user): bool
    {
        return false;

    }


    public function update(User $user, Setting $Setting): bool
    {
        return isAdmin();

    }


    public function delete(User $user, Setting $Setting): bool
    {
        return false;

    }


    public function restore(User $user, Setting $Setting): bool
    {
        return isAdmin();

    }


    public function forceDelete(User $user, Setting $Setting): bool
    {
        return false;

    }

}
