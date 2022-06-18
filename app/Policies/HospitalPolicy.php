<?php

namespace App\Policies;

use App\Models\Hospital;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class HospitalPolicy
{
    use HandlesAuthorization;


    public function viewAny(User $user)
    {
        return isAdmin() ||  $user->can('manageHospital');
    }

    public function view(User $user, Hospital $model)
    {
        return isAdmin() ||  $user->can('manageHospital');

    }


    public function create(User $user)
    {
        return isAdmin();

    }


    public function update(User $user, Hospital $model)
    {
        return isAdmin() ||  $user->can('manageHospital');

    }


    public function delete(User $user, Hospital $model)
    {
        return isAdmin();

    }


    public function restore(User $user, Hospital $model)
    {
        return isAdmin();

    }


    public function forceDelete(User $user, Hospital $model)
    {
        return isAdmin();
    }
}
