<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Category;

use App\Views\Composer\NavigationComposer;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('layouts.app', NavigationComposer::class);
    }
}
