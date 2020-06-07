<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            "name" => "required",
            "categorie_id" => "required",
            "image" => "required",
            "description" => "required"
        ];
    }

    public function messages()
    {
        return[
            "name.required" => "<span style='color:red;'>Le nom est obligatoire</span>",
            "categorie_id.required" => "<span style='color:red;'>Le categorie est obligatoire</span>",
            "image.required" => "<span style='color:red;'>L'image est obligatoire</span>",
            "description.required" => "<span style='color:red;'>La description est obligatoire</span>",
        ];
    }
}
