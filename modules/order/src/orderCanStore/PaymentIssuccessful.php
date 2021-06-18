<?php

namespace Order\orderCanStore;

use Order\Facade\ResponderFacade;
use Order\orderCanStore\AbstractHandler;



class PaymentIssuccessful extends AbstractHandler
{

  public function handle($products)
  {
    if (false) {
      abort(ResponderFacade::paymentFail());
    }

    $this->next();
  }
}
