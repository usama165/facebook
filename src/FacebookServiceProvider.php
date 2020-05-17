<?php

namespace usama165\facebook;

use Illuminate\Support\ServiceProvider;
use usama165\facebook\Library\Facebook;

class FacebookServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . "/routes.php");
        $this->publishes([
            __DIR__ . '/Config/Facebook.php' => config_path('Facebook.php'),
        ]);

        // $this->loadViewsFrom(__DIR__ . '/Views', 'excel');
        // $this->loadViewsFrom(__DIR__ . '/Views', 'mail');
        $this->loadViewsFrom(__DIR__ . '/Views', 'test');

    }

    public function register()
    {
        $this->app->bind('fbm', function ($app) {
            return new Facebook(config('Facebook.fb'));
        });

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */

}