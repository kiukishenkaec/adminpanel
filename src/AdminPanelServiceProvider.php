<?php
namespace Kiukishenkaec\AdminPanel;
use Illuminate\Support\ServiceProvider;

class AdminPanelServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(EngineManager::class, function ($app) {
            return new EngineManager($app);
        });
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/AdminPanel.php' => config_path('AdminPanel.php'),
            ]);
        }
    }
}