<?php

namespace Comment\Providers;

use Illuminate\Support\ServiceProvider;
use Comment\Facade\commentProviderFacade;
use Comment\Repositorie\CommentRepository;


class CommentServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . './../routes/routes.php');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }


    public function register()
    {
        $this->commentProvider();
    }

    public function commentProvider()
    {
        $this->app->bind('commentProviderFacade', function () {
            return new CommentRepository();
        });
    }
}
