<?php

namespace Category\Repositorie;

use  Category\Database\Models\Category;
use Category\Contract\RepositorieInterface;

class CategoryRepository  
{

   private $Repositorie;
    public function __construct(RepositorieInterface $Repositorie)
    {
        $this->Repositorie = $Repositorie;
    }
   
    public function getParenCategoryByIdWithChilds($id)
    {
        return Category::find($id)->with('childs')->where('parent_id', 0)->get();
    }

    public function getCategoryById($id)
    {
        return Category::find($id);
    }

    public function getAllCategory()
    {
       
        return Category::with('childs')->where('parent_id', 0)->get();
    }

    public function CreateCategory($name, $parent_id) :bool
    {
       $newCategory = Category::create([
            'name' => $name,
            'parent_id' => $parent_id,
        ]);
        return !$newCategory->exists ? false : true;
    }


    public function UpdateCategoryById($id,$name,$parent_id)
    {
        $category = $this->getCategoryById($id);
        $category->update(['name' => $name, 'parent_id' => $parent_id ]);
        return !$category->wasChanged() ? false : true;
    }


    public function DeleteCategoryById($id)
    {
        $this->getCategoryById($id)->delete();
    }
}
