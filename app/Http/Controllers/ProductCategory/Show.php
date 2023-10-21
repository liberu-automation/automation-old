<?php

namespace App\Http\Controllers\ProductCategory;

use App\Http\Controllers\Controller;
use App\Models\Product;

class Show extends Controller
{

    public function __invoke(Product $product)
    {
        return ['product' => $product];   
    }
}
