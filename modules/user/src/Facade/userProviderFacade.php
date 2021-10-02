<?php

namespace User\Facade;

use Illuminate\Support\Facades\Facade;

class userProviderFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'userProviderFacade';  
    }
}
