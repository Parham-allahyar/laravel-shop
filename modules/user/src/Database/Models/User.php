<?php

namespace User\Database\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

use Address\Trait\HasAddress;
use Comment\Trait\HasComments;
use Order\Trait\HasOrder;

class User extends Authenticatable implements JWTSubject
{
    use HasFactory,Notifiable
    // HasPermissions
    ,HasAddress,HasComments,HasOrder;
    // protected $table = 'users';
   
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
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
