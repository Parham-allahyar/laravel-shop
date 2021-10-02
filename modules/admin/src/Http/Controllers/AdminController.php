<?php

namespace Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Admin\Facade\adminProviderFacade;
use Admin\Facade\ResponderFacade;


class AdminController extends Controller
{

    public function index()
    {
        $admins = adminProviderFacade::getAllAdmins();
        return  ResponderFacade::getAllAdmins($admins);
    }


    public function adminLogin(Request $request)
    {

        $credentials = request(['email', 'password']);

        if (!$token = auth('admin')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        $jwtToken = $this->respondWithToken($token);
        $userfd =  auth()->user();
        return response()->json($jwtToken);
    }


    public function register(Request $request)
    {

        $data = [
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => $request->password,
            ''
        ];
        adminProviderFacade::create($data);
        $adminId = adminProviderFacade::getCreatedSellerId();
        $token = auth('admin')->tokenById($adminId);
    }
}
