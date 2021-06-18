<?php

namespace Acl\Database\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Acl\Database\Models\Role;
use User\Database\Models\User;
use Seller\Database\Models\Seller;
use Admin\Database\Models\Admin;
use Comment\Trait\HasComments;
use Comment\Database\Models\Comment;

class Permission extends Model
{
    use HasFactory, HasComments;
    protected $fillable = ['name', 'description', 'guard'];
    public  function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
    public function roles()
    {
        return $this->morphedByMany(Role::class, 'permissionables');
    }
    public function admins()
    {
        return $this->morphedByMany(Admin::class, 'permissionables');
    }
    public function users()
    {
        return $this->morphedByMany(User::class, 'permissionables');
    }
    public function sellers()
    {
        return $this->morphedByMany(Seller::class, 'permissionables');
    }
}
