<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditarClienteRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id' => 'numeric',
            'nome' => 'required|between:3,255',
            'telefone' => 'required|numeric|digits_between:10,12',
            'cpf' => 'required|cpf',
            'placa_carro' => 'required|formato_placa_de_veiculo',
        ];
    }

    public function messages()
    {
        return [
            'id.numeric' => 'O id deve ser numérico',
            'nome.required' => 'O nome é obrigatório',
            'nome.between' => 'O nome deve ter entre 3 e 255 digitos',
            'telefone.numeric' => 'O telefone deve numérico',
            'telefone.digits_between' => 'O telefone deve ter entre 10 e 12 digitos',
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge(['id' => $this->route('id')]);
    }
}
