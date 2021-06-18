<?php

namespace Seller\Database\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Acl\Traits\HasPermissions;
use Comment\Trait\HasComments;
use Product\Trait\HasProducts;

class Seller extends Authenticatable implements JWTSubject
{
   
    use HasFactory,HasPermissions,HasProducts;
    protected $guard = 'seller';
    protected $fillable = [
        'name', 'email', 'password',
    ];

    public $type = "name";
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }


    public function getJWTCustomClaims()
    {
        return [];
    }
}
