<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
     * 'nome', 'email', 'url', 'description', 'address', 'google_maps', 
     * 'phone', 'phone_mobile', 'whatsapp', 'logotipo', 'icon',
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:255',
            'email' => 'required|email',            
            'description' => 'required|min:5',            
            'logotipo' => 'image|mimes:jpeg,png',
            'icon' => 'image|mimes:jpeg,png',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nome é um campo obrigatório!', 
        ];
    }
}
