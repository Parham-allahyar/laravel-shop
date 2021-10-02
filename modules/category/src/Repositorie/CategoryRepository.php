<?php

namespace Category\Repositorie;

use  Category\Database\Models\Category;

class CategoryRepository
{
    public function getCategorys()
    {
        return Category::all();
    }
    public function getParentCategorys()
    {
        return Category::where('parent_id', 0)->get();
    }
    public function getChildCategorys($id)
    {
        return Category::find($id)->where('parent_id', $id)->get();
    }
    public function getParenCategoryByIdWithChilds($id)
    {
        return Category::find($id)->with('childs')->where('parent_id', 0)->get();
    }
    public function getCategoryProducts($id)
    {
        return Category::find($id)->categories()->get();
    }
    public function getCategoryById($id)
    {
        return Category::find($id);
    }
    public function CreateCategory($name, $parent_id): bool
    {
        $newCategory = Category::create([
            'name' => $name,
            'parent_id' => $parent_id,
        ]);
        return !$newCategory->exists ? false : true;
    }
    public function UpdateCategoryById($id, $name, $parent_id)
    {
        $category = $this->getCategoryById($id);
        $category->update(['name' => $name, 'parent_id' => $parent_id]);
        return !$category->wasChanged() ? false : true;
    }


    public function DeleteCategoryById($id)
    {
        $this->getCategoryById($id)->delete();
    }
}
