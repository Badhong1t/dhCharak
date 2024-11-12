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
            $table->string('title');
            $table->string('slug');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->foreignId('subcategory_id')->constrained('sub_categories')->onDelete('cascade');
            $table->string('sku')->nullable();
            $table->string('barcode')->nullable();
            $table->decimal('customer_price', 8, 2);
            $table->decimal('business_price', 8, 2)->nullable();
            $table->string('attribute_id')->nullable();
            $table->string('attribute_value_id')->nullable();
            $table->integer('quantity');
            $table->text('short_description')->nullable();
            $table->text('description')->nullable();
            $table->text('additional_information')->nullable();
            $table->string('thumbnail');
            $table->enum('status', ['active', 'inactive'])->default('active');
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
