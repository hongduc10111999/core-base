<?php

namespace Corebase\Option\Providers;

use Corebase\Option\Repositories\Option\OptionRepository;
use Corebase\Option\Repositories\Option\OptionRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class OptionServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . "/../routes/web.php");
        $this->loadViewsFrom(__DIR__ . "/../resources/views", 'option');
        $this->loadMigrationsFrom(__DIR__."/../Database/Migrations",'option');

    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . "/../Config/app.php", 'option');
        $this->mergeConfigFrom(__DIR__ . "/../Config/menu.php", 'menu');
        foreach (glob(__DIR__ . "/../Helper/*.php") as $fileName) {
            require_once $fileName;
        }
        $this->app->bind(
            OptionRepositoryInterface::class,
            OptionRepository::class
        );
    }
}
