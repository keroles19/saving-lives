<?php

namespace App\Providers;

use App\Models\Receiver;
use App\Models\Setting;
use App\Observers\ReceieverObserver;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Nova;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Receiver::observe(ReceieverObserver::class);
        Paginator::useBootstrap();


    }
}
