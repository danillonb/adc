<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EcleseRequest extends FormRequest
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
            'funcao' => 'required|unique:eclese',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'A Atividade não pode ficar em branco!',
            'unique' => 'Essa Atividade já está cadastrada!'
        ];
    }

}
