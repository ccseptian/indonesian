<?php

namespace Ccseptian\Indonesian;

use Illuminate\Support\ServiceProvider;

class IndonesianServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . '/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Ccseptian\Indonesian\IndonesianController');
    }
}
