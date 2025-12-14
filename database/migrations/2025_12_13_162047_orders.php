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
            $table->id('order_id');
            $table->unsignedBigInteger('user_id')->nullable(); // Nullable untuk guest checkout
            $table->string('product_id'); // Comma-separated product IDs
            $table->string('status', 50)->default('Pending');
            $table->decimal('total', 15, 2)->default(0);
            
            // Customer Info
            $table->string('customer_name');
            $table->string('customer_email');
            $table->string('customer_phone');
            
            // Shipping Info
            $table->string('shipping_courier');
            $table->string('shipping_service');
            $table->decimal('shipping_cost', 10, 2);
            
            $table->timestamps();
            
            $table->foreign('user_id')
                  ->references('user_id')->on('users')
                  ->onUpdate('cascade')
                  ->onDelete('set null');
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
