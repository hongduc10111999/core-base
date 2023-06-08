<?php

namespace Corebase\Page\Providers;

use Corebase\Page\Repositories\Page\PageRepository;
use Corebase\Page\Repositories\Page\PageRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class PageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . "/../routes/web.php");
        $this->loadViewsFrom(__DIR__ . "/../resources/views", 'page');
        $this->loadMigrationsFrom(__DIR__."/../Database/Migrations",'page');

    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . "/../Config/app.php", 'page');
        $this->mergeConfigFrom(__DIR__ . "/../Config/menu.php", 'menu');
        $this->app->bind(
            PageRepositoryInterface::class,
            PageRepository::class
        );
    }
}
