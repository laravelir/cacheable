<?php

namespace Laravelir\Cacheable\Providers;

use Illuminate\Support\ServiceProvider;
use Laravelir\Cacheable\Console\Commands\InstallPackageCommand;
use Laravelir\Cacheable\Facades\Cacheable;

class CacheableServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . "/../../config/cacheable.php", 'cacheable');

        $this->registerFacades();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerCommands();
    }

    private function registerFacades()
    {
        $this->app->bind('cacheable', function ($app) {
            return new Cacheable();
        });
    }

    private function registerCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallPackageCommand::class,
            ]);
        }
    }

    public function publishConfig()
    {
        $this->publishes([
            __DIR__ . '/../../config/cacheable.php' => config_path('cacheable.php')
        ], 'cacheable-config');
    }

}
