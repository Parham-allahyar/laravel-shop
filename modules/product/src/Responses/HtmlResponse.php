<?php

namespace Category\Responses;

use Illuminate\Support\Facades\Facade;

class HtmlResponse extends Facade
{
    public function hi()
    {
        return "html";
    }
}