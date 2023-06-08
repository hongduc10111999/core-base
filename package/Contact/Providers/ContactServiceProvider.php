<?php

namespace Corebase\Contact\Providers;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . "/../routes/web.php");
        $this->loadViewsFrom(__DIR__ . "/../resources/views", 'contact');
        $this->loadMigrationsFrom(__DIR__."/../Database/Migrations",'contact');
        $this->publishes([__DIR__.'/../Config/contact.php' => config_path('contact.php')]);
        $this->mergeConfigFrom(__DIR__ . "/../Config/app.php", 'contact');
        $this->mergeConfigFrom(__DIR__ . "/../Config/contact.php", 'contact');
        $this->mergeConfigFrom(__DIR__ . "/../Config/menu.php", 'menu');
        $this->mergeConfigFrom(__DIR__ . "/../Config/menuprofile.php", 'menuprofile');
    }

    public function register()
    {

        foreach (glob(__DIR__ . "/../Helper/*.php") as $fileName) {
            require_once $fileName;
        }
        // $this->app->bind(
        //     MailToRepositoryInterface::class,
        //     MailToRepository::class
        // );
    }
}
