<?php

namespace  Address\Trait;

use  Address\Database\Models\Address;

trait HasAddress
{
    public function addresses()
    {
        return $this->morphMany(Address::class, 'addressable');
    }
}
