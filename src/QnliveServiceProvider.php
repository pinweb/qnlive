<?php

namespace Pinweb\Qnlive;

use Illuminate\Support\ServiceProvider;

class QnliveServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'pinweb');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'pinweb');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/qnlive.php', 'qnlive');

        // Register the service the package provides.
        $this->app->singleton('qnlive', function () {
            return new Qnlive(config('qnlive.ak'), config('qnlive.sk'), config('qnlive.hub'));
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['qnlive'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__ . '/../config/qnlive.php' => config_path('qnlive.php'),
        ], 'qnlive.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/pinweb'),
        ], 'qnlive.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/pinweb'),
        ], 'qnlive.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/pinweb'),
        ], 'qnlive.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
