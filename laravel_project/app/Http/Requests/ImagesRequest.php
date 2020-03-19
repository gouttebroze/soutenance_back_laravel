<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImagesRequest extends FormRequest
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
    /*On va créer 3 règles pour le champ image :
    le champ est obligatoire (required),
    ce doit être une image (image),
    l’image doit faire au minimum 100 * 100 pixels (dimensions).
    La notre validation est prête.*/
    public function rules()
    {
        return ['image' => 'required|image|dimensions:min_width=100,min_height=100'
            
        ];
    }
}
