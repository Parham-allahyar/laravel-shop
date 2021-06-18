<?php

namespace Product\Providers;

use Illuminate\Support\ServiceProvider;
use Product\Repositorie\ProductRepository;


class ProductServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . './../routes/routes.php');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');
    }


    public function register()
    {
       
        $this->productProvider();  
    }


    public function productProvider()
    {
        $this->app->bind('ProductProviderFacade', function () {
            return new ProductRepository();
        });
    }
   
}