<?php

namespace Acl\Facade;

use Illuminate\Support\Facades\Facade;
use Acl\Responses\HtmlRes;
use Acl\Responses\JsonResponse;


class ResponderFacade extends Facade
{
    protected static function getFacadeAccessor()
    {



        return JsonResponse::class;
    }
}
