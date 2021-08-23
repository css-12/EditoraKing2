<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'titulo' => "bail|required|string|min:2|max:100|unique:books,titulo,$this->menu",
            'subtitulo' => "bail|string|nullable|min:3|max:100",
            'autor' => 'bail|required|string|min:3|max:100|',
            'genero_id' => 'bail|required|integer',
            'pagina' => 'bail|required|numeric|integer|min:0',
            'notaleitor' => 'bail|required|numeric|between:0.0,10.0',
            'sinopse' => 'bail|required|string'
        ];
    }

    public function attributes()
    {
        return [
            'titulo' => 'título',
            'subtitulo' => 'subtítulo',
            'genero_id' => 'gênero',
            'pagina' => 'quantidade de páginas',
            'notaleitor' => 'nota média dos leitores'
        ];
    }

    public function messages()
    {
        return [
            'genero_id.required' => 'Por gentiliza, selecione uma opção',
            'required' => 'Por gentiliza, insira uma informação no campo :attribute'
        ];
    }
}
