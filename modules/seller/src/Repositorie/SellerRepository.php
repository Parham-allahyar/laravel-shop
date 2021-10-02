<?php

namespace Seller\Repositorie;

use Seller\Database\Models\Seller;

class SellerRepository
{

    public function getSellerInfo($id)
    {
        return Seller::find(1)->with(['productCreats'])->get();
    }

    public function getSellerProducts($id)
    {
        return Seller::find($id)->productCreats()->get();
    }


    public function create($data): bool
    {
        $sellerData = [
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ];

        $this->newSeller = Seller::create($sellerData);
        return !$this->newSeller->exists ? false : true;
    }

    public function getCreatedSellerId(): int
    {
        return $this->newSeller->id;
    }
}
