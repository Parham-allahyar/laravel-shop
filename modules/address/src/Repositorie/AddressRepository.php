<?php

namespace Address\Repositorie;

use  Address\Database\Models\Address;
use Illuminate\Support\Facades\Auth;

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

    public function CreateAddress(array $data) :bool
    {
        $user = Auth::user()->addresses()->create($data);
        return !$user->exists ? false : true;
    }


    public function userAddress()
    {
        $user = Auth::user();
        $userClass = get_class($user);
        return Address::where('addressable_id', $user->id)
            ->where('addressable_type', $userClass)
            ->get();
    }
    public function UpdateAddressById($id, array $data) :bool
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
