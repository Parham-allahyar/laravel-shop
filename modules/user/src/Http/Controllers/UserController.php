<?php

namespace User\Http\Controllers;

use App\Http\Controllers\Controller;
use User\Facade\userProviderFacade;
use User\Facade\storeCodeFacade;
use User\Facade\ResponderFacade;
use User\Facade\TokenFacade;
use Notification\Facade\notificationFacade;
use User\Http\Requests\UserRequest;


class UserController extends Controller
{

    public function index()
    {
        $users = userProviderFacade::getAllUsers();
        return  ResponderFacade::getAllUsers($users);
    }

    public function userInfo($id)
    {
        // $user = User::where('id', $id)->with('creats')->with('addresses')->get();
        // return new UserResource($user);
    }

    public function update(UserRequest $request)
    {

        $data = [
            'phone_number' =>  $request->phone_number,
            'email' =>  $request->email,
            'first_name' =>  $request->first_name,
            'last_name' =>  $request->last_name,

        ];

        $user = userProviderFacade::update($data);
        return $user;
    }


    public function login(UserRequest $request)
    {
        //GET User Phone Number
        $phone_number = $request->input('phone_number');

        //GET Or Create User
        userProviderFacade::firstOrCreate($phone_number);

        //Generate Verification Code
        $code = random_int(100000, 999999);

        // Cache Verification Code
        storeCodeFacade::saveCode($code, $phone_number);

        //send Verification Code
        //notificationFacade::sendsms($phone_number, $code);

        //send Response for client
        return  ResponderFacade::login();
    }

    public function auth()
    {
        $receivedCode = request('code');
        $phone_number = request('phone_number');

        // Check 
        $status = storeCodeFacade::getCode($phone_number, $receivedCode);

        //Fail Login IF Phone Number & Received Code is Incompatible
        if (!$status) return ResponderFacade::loginFail();

        //GET User Id
        $userId = userProviderFacade::getUserIdByPhoneNumber($phone_number);

        //Create Token 
        $userToken  = TokenFacade::createToken($userId);

        //send Response for client
        return  ResponderFacade::auth($userToken);
    }
}
