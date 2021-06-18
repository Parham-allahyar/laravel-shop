<?php

namespace Seller\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Seller\Facade\sellerProviderFacade;
use Seller\Facade\TokenFacade;
use Seller\Http\Resources\SellerResource;
use Seller\Database\Models\Seller;
use Seller\Http\Requests\SellerRequest;


class SellerController extends Controller
{


    public function sellers()
    {
        return new SellerResource(Seller::all());
    }

    public function sellerLogin(Request $request)
    {
        $credentials = request(['email', 'password']);

        if (!$token = auth('seller')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $jwtToken = $this->respondWithToken($token);
        return response()->json($jwtToken);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            //'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }



    public function register(SellerRequest $request)
    {

        $data = [
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => $request->password,
        ];

        //Create Seller
        sellerProviderFacade::create($data);

        $sellerId = sellerProviderFacade::getCreatedSellerId();
        //Generate Token
       $token = auth('seller')->tokenById($sellerId);
      
       
       
    }
}
