<?php

namespace User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

   
    public function rules()
    {
     
        return [
            // 'phone_number' => 'required|min:11|max:11|unique:users',
            
        ];
    }
}
