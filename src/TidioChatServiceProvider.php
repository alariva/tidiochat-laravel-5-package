<?php

namespace alariva\tidiochat;

use alariva\tidiochat\TidioChat;
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
        $this->app->bindShared('tidiochat', function ($app) {
            return new TidioChat();
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
        $configPath = __DIR__ . '/../config/TidioChat.php';

        $this->publishes([$configPath => config_path('TidioChat.php')]);

        $this->mergeConfigFrom($configPath, 'TidioChat');
    }
}
