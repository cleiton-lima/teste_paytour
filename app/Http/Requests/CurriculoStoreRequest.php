<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CurriculoStoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome' => ['required', 'string', 'min:1', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'telefone' => ['required', 'min:11', 'max:11'],
            'cargo_desejado' => ['required'],
            'escolaridade' => ['required'],
            'arquivo' => ['required', 'mimes:pdf'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, mixed>
     */
    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório',
            'email.required' => 'O campo email é obrigatório',
            'telefone.required' => 'O campo telefone é obrigatório',
            'cargo_desejado.required' => 'O campo cargo desejado é obrigatório',
            'escolaridade.required' => 'O campo escolaridade é obrigatório',
            'arquivo.required' => 'Só são aceitos os formato PDF, DOC e DOCX de até 1MB',
        ];
    }
}
