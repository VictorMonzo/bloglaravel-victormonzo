<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'titol' => 'required|min:5',
            'contingut' => 'required|min:50'
        ];
    }

    public function messages()
    {
        return [
            'titol.required' => 'El título es obligatorio',
            'titol.min' => 'El título debe tener 5 caráteres como mínimo',
            'contingut.required' => 'El contenido es obligatorio',
            'contingut.min' => 'El contenido debe tener 50 caráteres como mínimo',
        ];
    }
}
