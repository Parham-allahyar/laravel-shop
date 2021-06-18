<?php

namespace Category\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    
    public function authorize()
    {
        return false;
    }

   
    public function rules()
    {
        return [
            'name' => 'required',
            'parent_id' => 'required',
        ];
    }
}
