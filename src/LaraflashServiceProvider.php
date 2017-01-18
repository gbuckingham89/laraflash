<?php

namespace Gbuckingham89\Laraflash;

use Illuminate\Support\ServiceProvider;

/**
 * Class LaraflashServiceProvider
 * @package Gbuckingham89\Laraflash
 */
class LaraflashServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            SessionStorage::class,
            LaravelSessionStorage::class
        );

        $this->app->singleton('laraflash', function () {
            return $this->app->make(LaraflashService::class);
        });
    }

    /**
     * Publish the default view
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../views', 'laraflash');
        $this->publishes([
            __DIR__ . '/../views' => base_path('resources/views/vendor/laraflash')
        ]);
    }
}