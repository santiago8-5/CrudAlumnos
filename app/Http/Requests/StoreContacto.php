<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContacto extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:100',
            'correo' => 'required|email',
            'mensaje' => 'required|max:190'
        ];
    }


    public function messages()
    {
        return [
            'name.max' => 'El nombre no puede tener mas de 100 caracteres ',            
        ];
    }
}
