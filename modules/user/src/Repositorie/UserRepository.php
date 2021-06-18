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
