<?php

namespace App\Http\Controllers\Product\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class Index extends Controller
{
    public function __invoke(Product $product, Request $request)
    {
        $query = Product::query();

        if ($request->has('search')) {
            $query->where('product_name', 'like', '%' . $request->search . '%');
        }

        $products = $query->paginate(10);

        return [
            'products' => $products
        ];
    }
    
}
