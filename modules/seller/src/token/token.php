<?php

namespace Seller\token;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Seller\Facade\sellerProviderFacade;
use Seller\Facade\TokenFacade;
use Seller\Http\Resources\SellerResource;
use Seller\Database\Models\Seller;
use Seller\Http\Requests\SellerRequest;

class token
{
    public function createToken($sellerId)
    {
         
        $token = auth()->tokenById($sellerId);
      dd($token);
        return $this->respondWithToken($token);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            //'expires_in' => auth()->Carbon::now()->subDays(30)
        ]);
    }
}
