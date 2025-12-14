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
        Schema::table('orders', function (Blueprint $table) {
            Schema:: table('orders', function (Blueprint $table) {
            // Midtrans Snap Token
            $table->string('snap_token')->nullable()->after('total');
            
            // Payment Information
            $table->string('payment_type')->nullable()->after('snap_token');
            $table->string('transaction_id')->nullable()->after('payment_type');
            $table->string('payment_status')->default('pending')->after('transaction_id');
            
            // Transaction Time
            $table->timestamp('transaction_time')->nullable()->after('payment_status');
            
            // Add index for faster queries
            $table->index('snap_token');
            $table->index('transaction_id');
            $table->index('payment_status');
        });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            Schema::table('orders', function (Blueprint $table) {
            $table->dropIndex(['snap_token']);
            $table->dropIndex(['transaction_id']);
            $table->dropIndex(['payment_status']);
            
            $table->dropColumn([
                'snap_token',
                'payment_type',
                'transaction_id',
                'payment_status',
                'transaction_time'
            ]);
        });
        });
    }
};
