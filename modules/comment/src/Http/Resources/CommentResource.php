<?php

namespace Comment\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
