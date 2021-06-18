<?php

namespace Category\Responses;

use Illuminate\Support\Facades\Facade;

class JsonResponse extends Facade
{
    public function hi()
    {
        return "hi";
    }
}