<?php

namespace Comment\Facade;

use Illuminate\Support\Facades\Facade;
use Comment\Responses\HtmlRes;
use Comment\Responses\JsonResponse;


class ResponderFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return JsonResponse::class;
    }
}
