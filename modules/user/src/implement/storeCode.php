<?php

namespace User\implement;
use Illuminate\Support\Facades\Cache;


class storeCode
{
    public function saveCode($code, $phone_number)
    {
        Cache::put($code, $phone_number, 120);
    }

    public function getCode($phone_number,$receivedCode)
    {
        $userPhoneNumber = Cache::get($receivedCode);

        return $phone_number == $userPhoneNumber  ? true : false;
     

       
    }
}
