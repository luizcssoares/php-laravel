<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgendaFormRequest extends FormRequest
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
            'nome'   => 'required | min:6',
            'cpf'    => 'required',
            'fone'   => 'required',
            'email'  => 'required',
            'perfil' => 'required'
        ];
    }

    public function messages(){
        return [
            'required' => 'O campo :attribute é obrigatorio',
            'min:6'=> 'O Campo :attribute precisa de pelo menos 6 caracteres'
        ];
    }
}
