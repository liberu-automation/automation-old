<?php

namespace App\Http\Controllers\Product\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;


class Destroy extends Controller
{
    public function __invoke(Product $product)
    {
        $product->delete();

        return [
            'message' => __('The product was successfully deleted'),
            'redirect' => 'product.index'
        ];
    }
}
