<?php

namespace  User\Trait;



use User\Database\Models\User;
trait userTrait
{
  
    public function getUserById($id)
    {
      
        return User::find($id);

    }
}