<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUpdateSupport extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        // Aqui definimos as regras do cadastro ee uma verificacao antes de lancar os dados para bd
        // Nos tratamos aqui
        $rules =  [
            // Nos podemos usar o pipe(|) para separar assim como podemos usar um array Abaixo teremos dois exemplos usando as duas formas
            'subject' => 'required|min:3|max:255|unique:supports',

            'body' => [
                'required',
                'min:3',
                'max:5000',
            ],
        ];

        if ($this->method() === 'PUT') {

            $rules['subject'] = [
                'required',
                'min:3',
                'max:5000',
                // Para tratar colunas que devem ser unicas na hora de fazer o update temos duas formas
                // 1.
                // "unique:supports,subject,{$this->id},id",
                // 2.
                Rule::unique('supports')->ignore($this->id),
            ];
        }

        return $rules;
    }
}
