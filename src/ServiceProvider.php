<?php

namespace Breuermarcel\Freecasts;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class ServiceProvider extends IlluminateServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__ . "/../resources/lang", "freecasts");
        $this->loadViewsFrom(__DIR__ . "/../resources/views", "freecasts");
        $this->loadMigrationsFrom(__DIR__ . "/../database/migrations");
        $this->registerRoutes();
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . "/../config/freecasts.php", "freecasts");

        $this->app->singleton("freecasts", function () {
            return new Freecasts();
        });
    }

    private function routeConfiguration(): array
    {
        return [
            "prefix" => config("freecasts.routing.prefix"),
            "middleware" => config("freecasts.routing.middleware"),
        ];
    }

    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__ . "/routes.php");
        });
    }
}
