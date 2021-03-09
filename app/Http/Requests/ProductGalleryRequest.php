<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductGalleryRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'products_id' => 'required|integer|exists:products,id',
            'photo' => 'required|image',
            'is_default' => 'boolean'
        ];
    }
}
