<?php

namespace User\Repositorie;

use  User\Database\Models\User;
use Illuminate\Support\Facades\Auth;

class UserRepository
{
    public function getAllUsers()
    {
        return User::all();
    }
    public function getUserInfo($id)
    {
      return User::where('id',$id)->with(['userAddresses','commentcreats'])->get();  
    }
    public function getUserById($id)
    {
        return User::where('id', $id)
            ->get();
    }

    public function firstOrCreate($phone_number)
    {
        $user = User::firstOrCreate(['phone_number' => $phone_number]);
        return !$user->exists ? Null : $user;
    }

    public function getUserComments()
    {
        $user = Auth::user();
        $user = User::find(1);

        return $user->Commentcreats()->get();
    }

    public function getUserOrders()
    {
        $user = Auth::user();
        $user = User::find(1);
        return $user->Ordercreats()->get();
    }

    public function getUserIdByPhoneNumber($phoneNumber)
    {
        $user = User::where('phone_number', $phoneNumber)
            ->first();
        return $user->id;
    }


    public function update($data)
    {


        $user = Auth::user();
        $user->update([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'phone_number' => $data['phone_number'],
        ]);

        return !$user->wasChanged() ? false : true;
    }
}
