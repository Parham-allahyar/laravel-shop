<?php

namespace Address\Database\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{

    
    protected $fillable = ['city','province','street','alley','plaque','zip_code','description'];
    
    public function addressable()
    {
        return $this->morphTo();
    }

}