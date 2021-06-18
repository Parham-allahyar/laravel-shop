<?php

namespace Admin\Facade;

use Illuminate\Support\Facades\Facade;
use Admin\Responses\HtmlRes;
use Admin\Responses\JsonResponse;


class ResponderFacade extends Facade
{
    protected static function getFacadeAccessor()
    {

        $request = request('client');

        if ($request == 'html') {
            return HtmlRes::class;
        }
        if ($request == 'json') {
            return JsonResponse::class;
        }
    }
}
