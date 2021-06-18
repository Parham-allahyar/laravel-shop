<?php

namespace Category\Facade;

use Illuminate\Support\Facades\Facade;
use Category\Contracts\RepositorieInterface;
use Illuminate\Support\Facades\App;

class categoryProviderFacade extends Facade
{

   
    protected static function getFacadeAccessor()
    {
        return RepositorieInterface::class;
    }
}
