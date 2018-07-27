<?php

namespace App\Providers;

use App\ViewComposer\SidebarComposer;
use Illuminate\Support\ServiceProvider;
use View;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('adminviews.partials.sidebar', SidebarComposer::class);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
