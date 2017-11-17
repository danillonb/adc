<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DptoRequest extends FormRequest
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
            'departamento' => 'required',
            'igreja' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'departamento.required' => 'O Departamento não pode ficar em branco!',
            'igreja.required' => 'A Igreja não pode ficar em branco!',
        ];
    }
}
