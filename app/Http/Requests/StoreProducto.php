<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProducto extends FormRequest
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
            'name'=>'required',
            'costo'=>['required',
            'integer',
            function ($attribute, $value, $fail) {
                if ($value > 0) {
                    $fail('El precio debe ser mayor a 0.');
                }
            },],

            'color'=>'required'

          
        ];
    }
}


             /*

             VALIDAR QUE EL NOMBRE SEA UNICO
            'nombre' => [
                'required',
                Rule::unique('productos', 'nombre'), // Verifica la unicidad en la tabla 'productos' y el campo 'nombre'
            ],

            */

            /*

            VALIDAR QUE LA EDAD SEA MAYOR 
              'edad' => [
                'required',
                'integer',
                function ($attribute, $value, $fail) {
                    if ($value <= 20) {
                        $fail('La edad debe ser mayor de 20 años.');
                    }
                },
            ],

            */