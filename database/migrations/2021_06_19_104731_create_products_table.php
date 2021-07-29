<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id')->constrained('brands')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->foreignId('subcategory_id')->constrained('sub_categories')->onDelete('cascade');
            $table->foreignId('subsubcategory_id')->constrained('sub_sub_categories')->onDelete('cascade');
            $table->string('product_name_en');
            $table->string('product_name_bn');
            $table->string('product_slug_en');
            $table->string('product_slug_bn');
            $table->string('product_code')->unique();
            $table->string('product_qty');
            $table->string('product_tags_en')->nullable();
            $table->string('product_tags_bn')->nullable();
            $table->string('product_size_en')->nullable();
            $table->string('product_size_bn')->nullable();
            $table->string('product_color_en')->nullable();
            $table->string('product_color_bn')->nullable();
            $table->string('selling_price');
            $table->string('discount_price')->nullable();
            $table->string('short_descp_en')->nullable();
            $table->string('short_descp_bn')->nullable();
            $table->string('long_descp_en')->nullable();
            $table->string('long_descp_bn')->nullable();
            $table->string('product_thambnail');
            $table->string('hot_deals')->default(false);
            $table->string('featured')->default(false);
            $table->string('special_offer')->default(false);
            $table->string('special_deals')->default(false);
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
