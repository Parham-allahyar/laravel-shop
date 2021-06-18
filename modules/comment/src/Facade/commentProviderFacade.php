<?php

namespace Comment\Facade;

use Illuminate\Support\Facades\Facade;

class commentProviderFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'commentProviderFacade';  
    }
}