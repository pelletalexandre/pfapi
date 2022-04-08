<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class [model]Request extends FormRequest
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
            [list_rules]
        ];
    }


    /**
     * Retourne la liste des messages relatifs aux erreurs de validation
     *
     * @return array
     */
    public function messages ()
    {
        return [
            [list_messages]
        ];
    }
}