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
            'titulo' => 'bail|required|min:3|max:100|',
            'autor' => 'bail|required|min:3|max:100|',
            'pagina' => 'bail|required|numeric|integer',
            'notaleitor' => 'bail|required|numeric|between:0.0,10.0'
        ];
    }
}
