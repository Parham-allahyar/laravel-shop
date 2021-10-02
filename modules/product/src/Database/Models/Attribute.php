<?php

namespace Product\Database\Models;

use Illuminate\Database\Eloquent\Model;
use Product\Database\Models\Product;
use Product\Database\Models\AttributeValue;

class Attribute extends Model
{
    protected $fillable = ['name'];
    public $timestamps = false;

    public function values()
    {
        return  $this->hasMany(AttributeValue::class);
    }
}
