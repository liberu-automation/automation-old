<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->integer('product_id', true);
            $table->string('product_name');
            $table->integer('product_category_id');
            $table->string('short_description');
            $table->string('long_description');
            $table->decimal('price', 10, 2);
            $table->boolean('is_variable')->default(0);
            $table->boolean('is_grouped')->default(0);
            $table->boolean('is_simple')->default(1);
            $table->binary('product_image');
            $table->timestamps();

            $table->foreign('product_category_id')->references('product_category_id')->on('product_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
