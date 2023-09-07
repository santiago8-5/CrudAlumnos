<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAlumno extends FormRequest
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
            'name' => 'required',
            'edad' => [
                'required',
                'integer',
                 function ($attribute, $value, $fail) {
                     if ($value < 18) {
                        $fail('La edad debe ser mayor a 18');
                     }
                 }
            ],
            'materia' => 'required',

            'promedio' => [
                'required',
                'integer',
                 function ($attribute, $value, $fail) {
                     if ($value < 70) {
                         $fail('El promedio debe ser mayor a 70');
                    }
                 }
            ]

        ];
    }
}
