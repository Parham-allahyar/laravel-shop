<?php

namespace Order\Database\Models;



use Illuminate\Database\Eloquent\Model;
use Product\Database\Models\Product;

class Order extends Model
{
    protected $fillable = ['price','order_id','creatable_id','creatable_type'];
    // public function productable()
    // {
    //     return $this->morphTo();
    // }
    public function creatable()
    {
        return $this->morphTo();
    }
    public function products()
    {
        return $this->morphedByMany(Product::class, 'orderables');
    }
}
