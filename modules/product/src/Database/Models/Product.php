<?php

namespace Product\Database\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Comment\Trait\HasComments;
use Category\Trait\HasCategory;
class Product extends Model
{
    use HasFactory , HasComments,HasCategory;
    protected $fillable = ['name', 'price' ,'quantity' , 'description'  ];
    public function categoryable()
    {
        return $this->morphTo();
    }

    public function creatable()
    {
        return $this->morphTo();
    }
    
    public function attributes()
    {
        return $this->belongsToMany(Attribute::class)->withPivot(['value_id']);
    }
   
}
