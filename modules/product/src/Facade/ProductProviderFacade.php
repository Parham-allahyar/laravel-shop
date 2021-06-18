<?php

namespace Product\Facade;

use Illuminate\Support\Facades\Facade;

class ProductProviderFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ProductProviderFacade';  
    }
}