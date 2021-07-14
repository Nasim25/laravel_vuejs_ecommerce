<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('category_name_en')->unique();
            $table->string('category_name_bn')->unique();
            $table->string('category_slug_en')->unique();
            $table->string('category_slug_bn')->unique();
            $table->string('category_icon')->nullable();
            $table->string('category_image')->nullable();
            $table->boolean('category_status')->default(true);
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
        Schema::dropIfExists('categories');
    }
}
