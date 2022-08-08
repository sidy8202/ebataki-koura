<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SecretaireFormRequest extends FormRequest
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
            'nom' => [
                'required',
                'string',
                'max:100'
            ],

            'prenom' => [
                'required',
                'string',
                'max:100'
            ],

            'adresse' => [
                'required',
                'string',
                'max:100'
            ],

            'phone' => [
                'required'
            ],

            'email' => [
                'string',
                'required'
            ],

            'username' => [
                'required',
                'string',
                'max:100'
            ],

            'password' => [
                'required',
                'string',
                'max:100'
            ],

            'id_departement' => [
                'string',
                'max:100'
            ]
           
        ];
            return $rules;
    }
}
