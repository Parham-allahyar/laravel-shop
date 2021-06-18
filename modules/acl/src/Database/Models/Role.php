<?php

namespace Acl\Database\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Acl\Database\Models\Permission;
use User\Database\Models\User;
use Seller\Database\Models\Seller;
use Admin\Database\Models\Admin;

class Role extends Model
{
    use HasFactory;
    public function permissions()
    {
        return $this->morphedByMany(Permission::class, 'roleables');
    }
    public function admins()
    {
        return $this->morphedByMany(Admin::class, 'roleables');
    }
    public function users()
    {
        return $this->morphedByMany(User::class, 'roleables');
    }
    public function sellers()
    {
        return $this->morphedByMany(Seller::class, 'roleables');
    }
}
