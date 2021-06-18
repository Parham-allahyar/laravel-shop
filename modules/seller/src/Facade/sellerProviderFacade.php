<?php

namespace Seller\Facade;

use Illuminate\Support\Facades\Facade;

class sellerProviderFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'sellerProviderFacade';  
    }
}