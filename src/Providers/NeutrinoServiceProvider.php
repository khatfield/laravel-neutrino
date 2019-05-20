<?php

namespace Khatfield\LaravelNeutrino\Providers;

use Illuminate\Support\ServiceProvider;
use Khatfield\LaravelNeutrino\Neutrino;

class NeutrinoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $config = realpath(__DIR__ . '/..') . '/config/neutrino.php';
        $this->mergeConfigFrom($config, 'neutrino');

        $this->app->singleton(Neutrino::class, function($app)
        {
            $neutrino = new Neutrino($app['config']);

            return $neutrino;
        });

        $this->app->alias(Neutrino::class, 'neutrino');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $config = realpath(__DIR__ . '/..') . '/config/neutrino.php';
        $this->publishes(
            [
                $config => config_path('neutrino.php'),
            ], 'neutrino-config');
    }

    public function provides()
    {
        return ['neutrino', Neutrino::class];
    }
}
