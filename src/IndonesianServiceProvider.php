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
        $this->publishes([
            __DIR__ . '/id' => base_path('resources/lang/vendor/indonesian/id'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
//        include __DIR__.'/id';
        include __DIR__.'/helpers.php';
    }
}
