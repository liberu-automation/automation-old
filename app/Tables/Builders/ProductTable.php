<?php

namespace App\Tables\Builders;

use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use LaravelLiberu\Tables\Contracts\Table;

class ProductTable implements Table
{
    protected const TemplatePath = __DIR__.'/../Templates/product.json';

    public function query(): Builder
    {
        return Product::selectRaw('
            products.product_id, products.product_name, products.short_description,products.long_description,  products.price,
            products.product_category_id, products.product_image, products.is_variable, products.is_grouped,
            ');
    }

    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
