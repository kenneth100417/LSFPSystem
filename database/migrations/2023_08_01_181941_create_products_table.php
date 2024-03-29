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
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('name');
            $table->string('image');
            $table->string('slug');
            $table->string('description');
            $table->integer('original_price');
            $table->integer('selling_price');
            $table->integer('quantity');
            $table->integer('quantity_sold')->default('0');
            $table->tinyInteger('trending')->default('0')->comment('1 - top | 0 - not');
            $table->tinyInteger('status')->default('1')->comment('1 - available | 0 - archived');

            $table->string('meta_title')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->string('meta_description')->nullable();


            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
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
