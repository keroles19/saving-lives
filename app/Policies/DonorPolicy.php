<?php

namespace App\Policies;

use App\Models\Donor;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DonorPolicy
{
    use HandlesAuthorization;


    public function viewAny(User $user)
    {
        return isAdmin() ||  $user->can('manageDonor');
    }


    public function view(User $user, Donor $Donor)
    {
        return isAdmin() ||  $user->can('manageDonor');

    }


    public function create(User $user)
    {
        return false;
    }


    public function update(User $user, Donor $Donor)
    {
        return isAdmin() || $user->can('manageDonor');
    }


    public function delete(User $user, Donor $Donor)
    {
        return isAdmin();
    }


    public function restore(User $user, Donor $Donor)
    {
        return isAdmin();
    }


    public function forceDelete(User $user, Donor $Donor)
    {
        return isAdmin();
    }
}
