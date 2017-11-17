<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MinisterialRequest extends FormRequest
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
            'funcao' => 'required|unique:ministerials',
            'descricao' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'funcao.required' => 'A Função Ministerial não pode ficar em branco!',
            'funcao.unique' => 'Essa Função Ministerial já está cadastrada!',
            'descricao.required' => 'A Descrição não pode ficar em branco!'
        ];
    }

}
