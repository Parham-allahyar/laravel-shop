<?php

namespace Address\Repositorie;

use  Address\Database\Models\Address;
use Illuminate\Support\Facades\Auth;
use User\Database\Models\User;

class AddressRepository
{

    public function getAddressById($id)
    {
        return Address::find($id);
    }

    public function getAllAddresss()
    {
        return Address::all();
    }

    public function CreateAddress(array $data): bool
    {
        $user = Auth::user();
        $user = User::find(1);
        dd($user);
        $userAddress = $user->userAddresses()->create($data);
        return !$userAddress->exists ? false : true;
    }


    public function getUserAddress()
    {
        $user =  Auth::user();
        $user =  User::find(1);
        $address = Address::where('addressable_id', $user->id)->get();
        return $address;
    }
    public function UpdateAddressById($id, array $data): bool
    {
        $address = Address::find($id);
        $address->update($data);
        return !$address->wasChanged() ? false : true;
    }


    public function DeleteAddressById($id)
    {
        $this->getAddressById($id)->delete();
    }
}
