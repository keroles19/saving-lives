<?php

namespace App\Policies;

use App\Models\Article;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ArticlePolicy
{
    use HandlesAuthorization;


    public function viewAny(User $user)
    {
        return isAdmin();
    }


    public function view(User $user, Article $article)
    {
        return isAdmin();

    }


    public function create(User $user)
    {
        return isAdmin();

    }


    public function update(User $user, Article $article)
    {
        return isAdmin();

    }


    public function delete(User $user, Article $article)
    {
        return isAdmin();

    }


    public function restore(User $user, Article $article)
    {
        return isAdmin();

    }


    public function forceDelete(User $user, Article $article)
    {
        return isAdmin();

    }
}
