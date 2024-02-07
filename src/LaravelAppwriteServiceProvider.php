<?php

namespace JoshCirre\LaravelAppwrite;

use Appwrite\Client;
use Appwrite\Services\Account;
use Appwrite\Services\Databases;
use Appwrite\Services\Storage;
use Illuminate\Support\ServiceProvider;

class LaravelAppwriteServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'laravel-appwrite');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-appwrite');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('laravel-appwrite.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-appwrite'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/laravel-appwrite'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/laravel-appwrite'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravel-appwrite');

        // Register the main class to use with the facade
        $this->app->singleton('laravel-appwrite', function () {
            return new LaravelAppwrite;
        });

        $this->app->singleton(Client::class, function ($app) {
            $client = new Client();

            $client
                ->setEndpoint(env('APPWRITE_ENDPOINT'))
                ->setProject(env('APPWRITE_PROJECT'))
                ->setKey(env('APPWRITE_KEY'));

            return $client;
        });

        // Bind the Appwrite 'Databases' service
        $this->app->singleton('appwrite.databases', function ($app) {
            return new Databases($app->make(Client::class));
        });

        // Bind the Appwrite 'Account' service
        $this->app->singleton('appwrite.account', function ($app) {
            return new Account($app->make(Client::class));
        });

        // Bind the Appwrite 'Storage' service
        $this->app->singleton('appwrite.storage', function ($app) {
            return new Storage($app->make(Client::class));
        });
    }
}
