<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            "lastname" => "required",
            "firstname" => "required",
            "email" => [
                "required",
                'email:rfc,dns',
            ],
            "contenu" => "required",

        ];
    }

    public function messages()
    {
        return [
            "lastname.required" => "<span style='color:red'>Le nom est requis</span>",
            "firstname.required" => "<span style='color:red'>Le prénom est requis</span>",
            "email.required" => "<span style='color:red'>L'email est requis</span>",
            "email.email" => "<span style='color:red'>Ceci doit etre un email</span>",
            "contenu.required" => "<span style='color:red'>Veuillez entre votre message</span>",
        ];
    }
}
