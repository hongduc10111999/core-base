<?php
namespace Corebase\Post\Providers;

use Corebase\Post\Repositories\Category\CategoryRepository;
use Corebase\Post\Repositories\Category\CategoryRepositoryInterface;
use Corebase\Post\Repositories\File\FileRepository;
use Corebase\Post\Repositories\File\FileRepositoryInterface;
use Corebase\Post\Repositories\Post\PostRepository;
use Corebase\Post\Repositories\Post\PostRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class PostServiceProvider extends ServiceProvider
{
    public function boot() {
        $this->loadRoutesFrom(__DIR__."/../routes/web.php");
        $this->loadViewsFrom(__DIR__."/../resources/views",'post');
        $this->loadTranslationsFrom(__DIR__."/../resources/lang",'post');
        $this->loadMigrationsFrom(__DIR__."/../Database/Migrations",'post');

    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__."/../Config/general.php",'general');
        $this->mergeConfigFrom(__DIR__ . "/../Config/menu.php", 'menu');
        $this->app->bind(
            PostRepositoryInterface::class,
            PostRepository::class
        );
        $this->app->bind(
            CategoryRepositoryInterface::class,
            CategoryRepository::class
        );
        $this->app->bind(
            FileRepositoryInterface::class,
            FileRepository::class
        );
    }
}
