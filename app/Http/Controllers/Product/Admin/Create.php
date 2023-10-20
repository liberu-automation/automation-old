<?php

namespace App\Http\Controllers\Product\Admin;

use App\Forms\Builders\ProductForm;
use App\Http\Controllers\Controller;


class Create extends Controller
{
    public function __invoke(ProductForm $form)
    {
        return ['form' => $form->create()];
    }
}
