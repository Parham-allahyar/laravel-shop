<?php

namespace Category\Trait;

use Category\Database\Models\Category;

trait GetCategory
{

    public function getCategorieById($id)
    {
        return Category::find($id);
    }
}
