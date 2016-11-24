<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CustomerRequest extends Request
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|unique:admins,email'
        ];
    }

    public function messages()
    {

        return [
            'name.required' => 'El campo Nombre es obligatorio.',
            'email.required' => 'El campo Email es obligatorio.',
            'email.unique' => 'El Email ya esta en uso.'
        ];
        
    }
}
