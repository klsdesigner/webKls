<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3',
            'email' => 'required|email',            
            'password' => 'required|min:6'
            
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nome é um campo obrigatório!', 
            'name.min' => 'Nome deve conter no mínimo 3 caracteres!', 
            'email.required' => 'E-mail é um campo obrigatório!', 
            'email.email' => 'Informe um e-mail válido!', 
            'password.required' => 'Password é um campo obrigatório!', 
            'password.min' => 'Password deve conter no mímimo 6 caracteres!' 
        ];
    }
}
