<?php

namespace User\Facade;

use Illuminate\Support\Facades\Facade;
use User\Responses\HtmlRes;
use User\Responses\JsonResponse;


class ResponderFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return JsonResponse::class;
    }
}
