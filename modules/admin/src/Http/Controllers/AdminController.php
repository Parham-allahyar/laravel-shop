<?php

namespace Admin\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Admin\Facade\adminProviderFacade;


class AdminController extends Controller
{
    public function adminLogin(Request $request)
    {
        $credentials = request(['email', 'password']);

        if (!$token = auth('admin')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        $jwtToken = $this->respondWithToken($token);
        $userfd =  auth('admin')->user();
        return response()->json($jwtToken);
    }





    public function register(Request $request)
    {

        $data = [
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => $request->password,
        ];
        adminProviderFacade::create($data);
        $adminId = adminProviderFacade::getCreatedSellerId();
        $token = auth('admin')->tokenById($adminId);

       
    }
}








