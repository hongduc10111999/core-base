<?php

namespace Corebase\MailTo\Providers;

use Corebase\MailTo\Repositories\MailTo\MailToRepository;
use Corebase\MailTo\Repositories\MailTo\MailToRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class MailToServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . "/../routes/web.php");
        $this->loadViewsFrom(__DIR__ . "/../resources/views", 'mailto');
        $this->loadMigrationsFrom(__DIR__."/../Database/Migrations",'mailto');

    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . "/../Config/app.php", 'mailto');
        $this->mergeConfigFrom(__DIR__ . "/../Config/menu.php", 'menu');
        foreach (glob(__DIR__ . "/../Helper/*.php") as $fileName) {
            require_once $fileName;
        }
        $this->app->bind(
            MailToRepositoryInterface::class,
            MailToRepository::class
        );
    }
}
