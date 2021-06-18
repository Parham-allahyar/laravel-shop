<?php

namespace Category\Database\Models;

use Illuminate\Database\Eloquent\Model;
use Product\Trait\HasProducts;
class Category extends Model
{

    use HasProducts;
    protected $fillable = ['name','parent_id'];
    
    public function childs()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id')->with('childs');
    }
    public function parent()
    {
        return $this->belongsTo('Category', 'parent_id');
    }
    public function posts()
    {
        return $this->morphedByMany(Post::class, 'taggable');
    }

}