<?php

namespace App\Providers;

use App\Nova\Metrics\NeWDonor;
use App\Nova\Metrics\NewHospital;
use App\Nova\Metrics\NewReceiver;
use App\Nova\Metrics\ObligationBlan;
use App\Nova\Metrics\ObligationPerDay;
use App\Nova\Metrics\OperationBlan;
use App\Nova\Metrics\OperationPerDay;
use Illuminate\Support\Facades\Gate;
use Infinety\Filemanager\FilemanagerTool;
use Laravel\Nova\Cards\Help;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;
use Silvanite\NovaToolPermissions\NovaToolPermissions;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {

    }

    /**
     * Get the cards that should be displayed on the default Nova dashboard.
     *
     * @return array
     */
    protected function cards()
    {
        return [
            new ObligationPerDay(),
            new NeWDonor(),
          new NewReceiver(),
          new NewHospital(),
          new OperationBlan(),
          New OperationPerDay(),


        ];
    }

    /**
     * Get the extra dashboards that should be displayed on the Nova dashboard.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [
            \ChrisWare\NovaBreadcrumbs\NovaBreadcrumbs::make(),
            (new NovaToolPermissions())->canSee(function (){
             return isAdmin();
            }),
            (new FilemanagerTool())->canSee(function (){
                return isAdmin();
            })

        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
