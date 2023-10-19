<?php

namespace App\Tables\Builders;

use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use LaravelLiberu\Tables\Contracts\Table;

class ProductTable implements Table
{
    protected const TemplatePath = __DIR__ . '/../Templates/product.json';

    public function query(): Builder
    {
        return Product::selectRaw(
            '
            product_categories.product_category_id, product_categories.is_child, product_categories.child_of'
        );
    }

    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
