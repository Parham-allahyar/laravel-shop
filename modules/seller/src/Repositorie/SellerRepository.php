<?php

namespace Seller\Repositorie;
use Seller\Database\Models\Seller;


class SellerRepository
{

   public  $newSeller ;

    public function create($data) :bool
    {
        $sellerData = [
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ];

        $this->newSeller = Seller::create($sellerData);
        return !$this->newSeller->exists ? false : true;
    }

    public function getCreatedSellerId() :int
    {
        return $this->newSeller->id; 
    }
}
