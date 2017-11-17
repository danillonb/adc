<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParentescoRequest extends FormRequest
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
            'parentesco' => 'required|unique:parentescos',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O Parentesco não pode ficar em branco!',
            'unique' => 'Esse Parentesco já está cadastrado!'
        ];
    }

}
