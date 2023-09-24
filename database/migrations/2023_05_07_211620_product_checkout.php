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
        Schema::create('product_checkout', function (Blueprint $table) {
            $table->id('product_id');
            $table->string('product_name');
            $table->decimal('product_price',8,2);
            $table->integer('product_quantity');
            $table->text('product_image_path');
            $table->string('checkout_free_option_label');
            $table->decimal('checkout_free_option_Value',8,2);
            $table->string('checkout_express_option_label');
            $table->decimal('checkout_express_option_value',8,2);
            $table->decimal('checkout_taxes_value',8,2);
            $table->string('checkout_language');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_checkout');
    }
};
