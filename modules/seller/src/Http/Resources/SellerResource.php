<?php

namespace Seller\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SellerResource extends JsonResource
{
    
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
