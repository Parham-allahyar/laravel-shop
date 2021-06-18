<?php

namespace Acl\Facade;

use Illuminate\Support\Facades\Facade;

class roleProviderFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'roleProviderFacade';  
    }
}