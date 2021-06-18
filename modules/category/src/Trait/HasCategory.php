<?php

namespace Category\Trait;

use Category\Database\Models\Category;

trait HasCategory
{
  public function categories()
    {
        return $this->morphToMany(Category::class, 'categorizable');
    }
  
}
