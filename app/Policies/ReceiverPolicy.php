<?php

namespace App\Policies;

use App\Models\Receiver;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReceiverPolicy
{
    use HandlesAuthorization;


    public function viewAny(User $user)
    {
        return isAdmin() ||  $user->can('manageReceiver');
    }


    public function view(User $user, Receiver $receiver)
    {
        return isAdmin() ||  $user->can('manageReceiver');

    }


    public function create(User $user)
    {
       return false;
    }


    public function update(User $user, Receiver $receiver)
    {
        return isAdmin() || $user->can('manageReceiver');
    }


    public function delete(User $user, Receiver $receiver)
    {
        return isAdmin();
    }


    public function restore(User $user, Receiver $receiver)
    {
       return isAdmin();
    }


    public function forceDelete(User $user, Receiver $receiver)
    {
        return isAdmin();
    }
}
