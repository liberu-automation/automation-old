<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateProductCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $this->route('product_category');

        return [

            'name' => 'required|string|max:255',
            'is_child' => 'required|boolean',
            'child_of' => 'required|integer',
        ];
    }
}
