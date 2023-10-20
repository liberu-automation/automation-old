<?php

namespace App\Http\Controllers\Product\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class Update extends Controller
{
    
    public function __invoke(ValidateProductRequest $request, Product $product)
    {
      
        $product->update($request->validated());

        return ['message' => __('The product was successfully updated')];
    }
    
}
