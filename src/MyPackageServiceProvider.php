<?php

namespace BeltranC\MyPackage;

use Illuminate\Support\ServiceProvider;

class MyPackageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        /*$this->loadRoutesFrom(__DIR__.'/routes.php');
        */
       $this->app->make('BeltranC\MyPackage\Controllers\MainController');
       $this->loadViewsFrom(__DIR__.'/views', 'mypackage');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }
}
