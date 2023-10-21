<?php

namespace App\Http\Controllers\ProductCategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateProductRequest;
use App\Models\ProductCategory;

class Update extends Controller
{
    public function __invoke(ValidateProductRequest $request, ProductCategory $productCategory)
    {
        $productCategory->update($request->validated());

        return ['message' => __('The product categorie was successfully updated')];
    
    }
}
