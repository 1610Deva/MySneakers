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
        Schema::create('table_products', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('Nama_Produk', 150);
            $table->text('Deskripsi')->nullable();
            $table->decimal('Harga', 10, 2);
            $table->integer('Jumlah_Stok')->default(0);
            $table->timestamps('Created_At')->useCurrent();
            $table->timestamps('Updated_At')->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_products');
    }
};
