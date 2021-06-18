<?php

namespace Order\orderCanStore;

use Order\orderCanStore\AbstractHandler;
use Illuminate\Support\Facades\Auth;
use Order\Facade\ResponderFacade;
use User\Trait\UserAddress;
class UserHaveAddress extends AbstractHandler
{


use UserAddress;

  public function handle($products)
  {
    $userAddres = $this->AuthenticatedUseraddresses();
    if (is_null($userAddres)) {
      abort(ResponderFacade::AddresNotFound());
    }
    $this->next();
  }
}
