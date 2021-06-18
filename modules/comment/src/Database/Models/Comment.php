<?php

namespace Comment\Database\Models;

use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{

    protected $fillable = ['comment', 'parent_id'  ];

    public function childs()
    {
        return $this->hasMany(Comment::class, 'parent_id', 'id')->with('childs');
    }
    public function parent()
    {
        return $this->belongsTo('Comment', 'parent_id');
    }


    public function commentable()
    {
        return $this->morphTo();
    }

    public function creatable()
    {
        return $this->morphTo();
    }
}
