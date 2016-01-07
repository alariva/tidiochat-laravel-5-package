<?php

namespace Alariva\Tidiochat;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class TidioChatServiceProvider extends LaravelServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->handleConfigs();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerTidioChat();
    }

    protected function registerTidioChat()
    {
        $this->app->singleton('tidiochat', function ($app) {
            return new AlarivaTidioChat();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }

    private function handleConfigs()
    {
        $configPath = __DIR__.'/../config/tidiochat.php';

        $this->publishes([$configPath => config_path('tidiochat.php')]);

        $this->mergeConfigFrom($configPath, 'tidiochat');
    }
}
