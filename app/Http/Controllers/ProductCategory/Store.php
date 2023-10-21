<?php

namespace App\Http\Controllers\ProductCategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateProductRequest;
use App\Models\ProductCategory;

class Store extends Controller
{
    public function __invoke(ValidateProductRequest $request, ProductCategory $productCategory)
    {
        
        $productCategory->fill($request->validated())->save();

        return [
            'message' => __('The product category was successfully created'),
            'redirect' => 'productCategory.edit',
            'param' => ['product' => $productCategory->product_category_id],
        ];
    }
}
