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
            $table->numeric('product_price');
            $table->numeric('product_quantity');
            $table->string('product_image_path');
            $table->string('checkout_free_option_label');
            $table->numeric('checkout_free_option_Value');
            $table->string('checkout_express_option_label');
            $table->numeric('checkout_express_option_value');
            $table->numeric('checkout_taxes_value');
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
