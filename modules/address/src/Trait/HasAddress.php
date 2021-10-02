<?php

namespace  Address\Trait;

use  Address\Database\Models\Address;

trait HasAddress
{
    public function userAddresses()
    {
        return $this->morphMany(Address::class, 'addressable');
    }
   
}
