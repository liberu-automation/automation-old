<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $this->route('product');

        return [
            
            'product_name' => 'required|string|max:255',
            'product_category_id' => 'required|integer',
            'short_description' => 'required|string|max:255',
            'long_description' => 'required|string|max:255',
            'price' => 'required|integer',
            'is_variable' => 'required|boolean',
            'is_grouped' => 'required|boolean',
            'is_simple' => 'required|boolean',
            'product_image' => 'required|string|max:255',   
        ];
    }
}
