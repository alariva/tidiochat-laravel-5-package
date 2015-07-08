<?php

namespace alariva\tidiochat;

use Blade;
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
        // $this->handleMigrations();
        // $this->handleViews();
        // $this->handleTranslations();
        // $this->handleRoutes();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'TidioChat::widget',
            function () {
                return new TidioChat;
            }
        );
        
        Blade::directive('tidiochat', function() {
            return "<?php echo TidioChat::render(); ?>";
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

    private function handleTranslations()
    {
        $this->loadTranslationsFrom('TidioChat', __DIR__.'/../lang');
    }

    private function handleViews()
    {
        $this->loadViewsFrom('TidioChat', __DIR__.'/../views');

        $this->publishes([__DIR__.'/../views' => base_path('resources/views/vendor/TidioChat')]);
    }

    private function handleMigrations()
    {
        $this->publishes([__DIR__ . '/../migrations' => base_path('database/migrations')]);
    }

    private function handleRoutes()
    {
        include __DIR__.'/../routes.php';
    }
}
