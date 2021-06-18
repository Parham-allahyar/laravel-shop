<?php

namespace Address\Http\Controllers;

use App\Http\Controllers\Controller;
use Address\Facade\AddressProviderFacade;
use Address\Facade\ResponderFacade;
use Address\Http\Requests\AddressRequest;



class AddressController extends Controller
{

    public function index()
    {
        $addresss = addressProviderFacade::getAllAddresss();
        return ResponderFacade::index($addresss);
    }

    public function store(AddressRequest  $request)
    {

        $data = [
            'city'        => $request->city,
            'province'    => $request->province,
            'street'      => $request->street,
            'alley'       => $request->alley,
            'plaque'      => $request->plaque,
            'description' => $request->description,
            'zip_code'    => $request->city,
        ];


        $addressIsCreated = AddressProviderFacade::CreateAddress($data);
        return $addressIsCreated ? ResponderFacade::CreatedResponse() : ResponderFacade::FaildResponse();
    }

    public function edit($id)
    {
        $address = AddressProviderFacade::getAddressById($id);
        return ResponderFacade::EditResponse($address);
    }

    public function update(AddressRequest $request, $id)
    {
        $data = [
            'city'        => $request->city,
            'province'    => $request->province,
            'street'      => $request->street,
            'alley'       => $request->alley,
            'plaque'      => $request->plaque,
            'description' => $request->description,
            'zip_code'    => $request->zip_code,
        ];

        $addressIsUpdated = AddressProviderFacade::UpdateAddressById($id, $data);
        return $addressIsUpdated ? ResponderFacade::UpdatesResponse() : ResponderFacade::FaildResponse();
    }

    public function destroy($id)
    {
        AddressProviderFacade::DeleteAddressById($id);
        return ResponderFacade::DeletedResponse();
    }

    public function userAddress()
    {
        $address = AddressProviderFacade::userAddress();

        return ResponderFacade::userAddressResponse($address);
    }
}
