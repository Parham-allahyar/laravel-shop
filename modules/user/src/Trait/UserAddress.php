<?php

namespace  User\Trait;


use Illuminate\Support\Facades\Auth;
use Address\Trait\HasAddress;
trait UserAddress
{
  use HasAddress;
    public function AuthenticatedUseraddresses()
    {
      $user = Auth::loginUsingId(1);
      // Auth::guard('api')->user();
      return $user->addresses()->get();

    }
}