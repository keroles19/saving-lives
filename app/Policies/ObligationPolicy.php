<?php

namespace App\Policies;

use App\Models\Obligation;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ObligationPolicy
{
    use HandlesAuthorization;


    public function viewAny(User $user)
    {
        return isAdmin() ||  $user->can('manageObligation');
    }


    public function view(User $user, Obligation $Obligation)
    {
        return isAdmin() ||  $user->can('manageObligation');

    }


    public function create(User $user)
    {
        return false;
    }


    public function update(User $user, Obligation $Obligation)
    {
        return isAdmin() || $user->can('manageObligation');
    }


    public function delete(User $user, Obligation $Obligation)
    {
        return isAdmin();
    }


    public function restore(User $user, Obligation $Obligation)
    {
        return isAdmin();
    }


    public function forceDelete(User $user, Obligation $Obligation)
    {
        return isAdmin();
    }
}
