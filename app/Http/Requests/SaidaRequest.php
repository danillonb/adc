<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaidaRequest extends FormRequest
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
            'saida' => 'required|unique:saidas',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'A Saída não pode ficar em branco!',
            'unique' => 'Essa Saída já está cadastrada!'
        ];
    }

}
