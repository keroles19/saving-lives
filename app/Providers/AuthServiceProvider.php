<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\Country;
use App\Models\Organ;
use App\Models\Receiver;
use App\Models\Setting;
use App\Models\User;
use App\Policies\ArticlePolicy;
use App\Policies\CountryPolicy;
use App\Policies\OrganPolicy;
use App\Policies\ReceiverPolicy;
use App\Policies\SettingPolicy;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Silvanite\Brandenburg\Traits\ValidatesPermissions;

class AuthServiceProvider extends ServiceProvider
{
    use ValidatesPermissions;

    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Article::class => ArticlePolicy::class,
        Country::class => CountryPolicy::class,
        User::class =>UserPolicy::class,
        Organ::class =>OrganPolicy::class,
        Receiver::class =>ReceiverPolicy::class,
        Setting::class =>SettingPolicy::class,


    ];

    protected $operations = [
            //'viewBlog',
            //'manageBlog',
            'manageHospital',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        collect($this->operations)->each(function ($permission) {
            Gate::define($permission, function ($user) use ($permission) {
                if ($this->nobodyHasAccess($permission)) {
                    return true;
                }
                return $user->hasRoleWithPermission($permission);
            });
        });

        $this->registerPolicies();

    }
}
