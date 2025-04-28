<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FakerImageProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Register the ImageGenerator service
        $this->app->singleton('ImageGenerator', function ($app) {
            return new \App\Service\ImageGenerator();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
