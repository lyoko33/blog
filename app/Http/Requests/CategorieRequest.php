<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategorieRequest extends FormRequest
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
            "name" => "required|max:255",
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "<span style='color:red;'>Le nom est obligatoire</span>",
            "name.max" => "<span style='color:red;'>Vous ne pouvez pas entrer plus de 255 caractères</span>"
        ];
    }
}
