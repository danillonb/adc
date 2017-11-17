<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntradaRequest extends FormRequest
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
            'entrada' => 'required|unique:entradas',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'A Entrada não pode ficar em branco!',
            'unique' => 'Essa Entrada já está cadastrada!'
        ];
    }

}
