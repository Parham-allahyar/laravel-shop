<?php

namespace Category\Providers;

use Illuminate\Support\ServiceProvider;
use Category\Contracts\RepositorieInterface;
use Category\Repositorie\CategoryRepository;

class CategoryServiceProvider extends ServiceProvider
{
    protected $defer = true;
public  $Repositorie ;
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . './../routes/routes.php');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }


    public function register()
    {
        $this->categoryProvider() ;
    }

    public function categoryProvider() 
    {

        $this->app->bind(RepositorieInterface::class, CategoryRepository::class);



        // $this->app->bind('categoryProviderFacade', function () {
        //      $Repositorie =  new CategoryRepository;
        //      return $Repositorie;
        // });
    }
}
