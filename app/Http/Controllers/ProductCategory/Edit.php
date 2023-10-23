<?php

namespace App\Http\Controllers\Product\Admin;

use App\Forms\Builders\ProductCategoryForm;
use App\Http\Controllers\Controller;
use App\Models\ProductCategory;

class Edit extends Controller
{
    
    public function __invoke(ProductCategory $productCategory , ProductCategoryForm $form)
    {
        return ['form' => $form->edit($productCategory)];
    }
    
}
