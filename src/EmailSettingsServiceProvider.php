<?php

namespace MarceloCorrea\LaravelEmail;

use Illuminate\Support\ServiceProvider;

class EmailSettingsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([__DIR__.'/../config/email-service.php' => config_path('email-service.php')], 'config');
        $this->publishes([__DIR__.'/../database/migrations/' => database_path('migrations')], 'migrations');
    }

    public function register()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }
}
