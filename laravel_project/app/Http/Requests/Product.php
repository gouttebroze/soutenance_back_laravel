<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class Product extends FormRequest
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
            'artist_name' => ['required', 'string', 'max:100'],
            'product_name' => ['required', 'string', 'max:100'],
            'desc_product' => ['required', 'string', 'max:500'],
            //'price_product' => ['required', 'decimal', 'max:'],
            //'img_filename' => ['required', 'string', 'max:'],
            'category_id' => ['required', 'string', 'max:100'],//unsignedInteger à la place de string?
        ];
    }
}

