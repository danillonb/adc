<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssinaturaRequest extends FormRequest
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
            'assinatura' => 'required',
            'cargo' => 'required',
            'registro' => 'required|unique:assinaturas',
        ];
    }

    public function messages()
    {
        return [
            'assinatura.required' => 'A Assinatura não pode ficar em branco!',
            'cargo.required' => 'O Cargo não pode ficar em branco!',
            'registro.required' => 'O Registro não pode ficar em branco!',
            'registro.unique' => 'O Registro informado já está sendo utilizado em outra Assinatura!',
        ];
    }
}
