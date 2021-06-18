<?php

namespace Order\orderCanStore;

use Order\orderCanStore\AbstractHandler;
use Illuminate\Support\Facades\Auth;
use Order\Facade\ResponderFacade;

class AuthenticatedUser extends AbstractHandler
{

    public function handle($products)
    {

        if (!is_null(Auth::user())) {
            abort(ResponderFacade::userNotAuthenticated());
          
        }

        $this->next();
    }
}
