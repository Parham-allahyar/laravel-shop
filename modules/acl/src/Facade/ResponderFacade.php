<?php

namespace Acl\Facade;

use Illuminate\Support\Facades\Facade;
use Acl\Responses\HtmlRes;
use Acl\Responses\JsonResponse;


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
