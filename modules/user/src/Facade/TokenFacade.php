<?php

namespace User\Facade;

use Illuminate\Support\Facades\Facade;

class TokenFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'TokenFacade';  
    }
}
