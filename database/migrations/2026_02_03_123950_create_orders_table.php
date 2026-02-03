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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_id')->unique();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('product_id');
            $table->decimal('total_price', 10, 2);
            $table->string("shipping_name");
            $table->longText("shipping_address");
            $table->string("shipping_city");
            $table->string("shipping_state");
            $table->string("shipping_zip");
            $table->string("shipping_phone");
            $table->enum("payment_method", ["cash-on-delivery", "credit-card", "paypal"]);
            $table->enum("payment_status", ["pending", "completed", "failed"])->default("pending");

            $table->enum("order_status", ["pending", "accepted", "processing", "dispatched", "delivered", "cancelled"])->default("pending");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
