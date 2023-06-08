<?php

namespace Corebase\Profile\Providers;

use Corebase\Profile\Repositories\CommentRepository;
use Corebase\Profile\Repositories\CommentRepositoryInterface;
use Corebase\Profile\Repositories\DescriptionRepository;
use Corebase\Profile\Repositories\DescriptionRepositoryInterface;
use Corebase\Profile\Repositories\SkillRepository;
use Corebase\Profile\Repositories\SkillRepositoryInterface;
use Corebase\Profile\Repositories\SlideRepository;
use Corebase\Profile\Repositories\SlideRepositoryInterface;
use Corebase\Profile\Repositories\SocialRepository;
use Corebase\Profile\Repositories\SocialRepositoryInterface;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class ProfileServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . "/../routes/web.php");
        $this->loadViewsFrom(__DIR__ . "/../resources/views", 'profile');
        $this->loadMigrationsFrom(__DIR__."/../Database/Migrations",'profile');
        $this->mergeConfigFrom(__DIR__ . "/../Config/menuprofile.php", 'profile');
        Paginator::useBootstrap();
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . "/../Config/app.php", 'profile');
        $this->mergeConfigFrom(__DIR__ . "/../Config/menu.php", 'menu');
        foreach (glob(__DIR__ . "/../Helper/*.php") as $fileName) {
            require_once $fileName;
        }
        $this->app->bind(
            DescriptionRepositoryInterface::class,
            DescriptionRepository::class
        );
        $this->app->bind(
            SkillRepositoryInterface::class,
            SkillRepository::class
        );
        $this->app->bind(
            SlideRepositoryInterface::class,
            SlideRepository::class
        );
        $this->app->bind(
            SocialRepositoryInterface::class,
            SocialRepository::class
        );
        $this->app->bind(
            CommentRepositoryInterface::class,
            CommentRepository::class
        );
    }
}
