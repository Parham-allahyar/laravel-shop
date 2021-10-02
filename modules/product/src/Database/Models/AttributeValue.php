<?php

namespace Product\Database\Models;

use Illuminate\Database\Eloquent\Model;
use Product\Database\Models\Attribute;

class AttributeValue extends Model
{
    protected $fillable = ['value'];

    public function attribute()
    {
        return $this->belongsToMany(Attribute::class, 'attribute_attributeValue_table');
    }
}
