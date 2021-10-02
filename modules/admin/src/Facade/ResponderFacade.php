<?php

namespace Admin\Facade;

use Illuminate\Support\Facades\Facade;
use Admin\Responses\HtmlRes;
use Admin\Responses\JsonResponse;


class ResponderFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return JsonResponse::class;
    }
}
