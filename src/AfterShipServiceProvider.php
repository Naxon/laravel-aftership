<?php

namespace Naxon\AfterShip;

use AfterShip\Couriers;
use AfterShip\LastCheckPoint;
use AfterShip\Notifications;
use AfterShip\Trackings;
use Illuminate\Support\ServiceProvider;

class AfterShipServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/aftership.php' => config_path('aftership.php'),
        ], 'config');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/aftership.php', 'aftership');

        $this->app->singleton('aftership.couriers', function($app) {
            return new Couriers($app['config']['aftership.api_key']);
        });

        $this->app->singleton('aftership.trackings', function($app) {
            return new Trackings($app['config']['aftership.api_key']);
        });

        $this->app->singleton('aftership.lastCheckPoint', function($app) {
            return new LastCheckPoint($app['config']['aftership.api_key']);
        });

        $this->app->singleton('aftership.notifications', function($app) {
            return new Notifications($app['config']['aftership.api_key']);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['aftership.couriers', 'aftership.trackings', 'aftership.lastCheckPoint', 'aftership.notifications'];
    }
}
