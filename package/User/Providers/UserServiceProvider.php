<?php

namespace Corebase\User\Providers;

use Corebase\User\Repositories\PermissionRepository;
use Corebase\User\Repositories\PermissionRepositoryInterface;
use Corebase\User\Repositories\RoleRepository;
use Corebase\User\Repositories\RoleRepositoryInterface;
use Corebase\User\Repositories\UserRepository;
use Corebase\User\Repositories\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . "/../routes/web.php");
        $this->loadViewsFrom(__DIR__ . "/../resources/views", 'user');
        $this->loadMigrationsFrom(__DIR__."/../Database/Migrations",'user');

    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . "/../Config/menu.php", 'menu');
        $this->app->bind(
            PermissionRepositoryInterface::class,
            PermissionRepository::class
        );
        $this->app->bind(
            RoleRepositoryInterface::class,
            RoleRepository::class
        );
        $this->app->bind(
            UserRepositoryInterface::class,
            UserRepository::class
        );

    }
}
