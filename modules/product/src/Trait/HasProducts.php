<?php

namespace Product\Trait;

use Product\Database\Models\Product;


trait HasProducts
{
  public function categories()
  {
    return $this->morphMany(Product::class, 'categoryable');
  }
  public function creats()
  {
   
 return $this->morphMany(Product::class, 'creatable');
  
  }

  




 





}




















