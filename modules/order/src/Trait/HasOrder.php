<?php

namespace Order\Trait;

use Order\Database\Models\Order;

trait HasOrder
{
    public function ordercreats()
    {
        return $this->morphToMany(Order::class, 'orderable');
    }




    
}