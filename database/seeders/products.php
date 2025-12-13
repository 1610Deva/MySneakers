<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'product_id' => "MS1",
                'nama_produk' => "Air Force 1 Men's Shoes - White",
                'merk_produk' => 'NIKE',
                'harga' => 1600000.00,
                'jumlah_stok' => 50,
            ],
            [
                'product_id' => "MS2",
                'nama_produk' => "Samba OG Shoes - Cloud White",
                'merk_produk' => 'ADIDAS',
                'harga' => 1200000.00,
                'jumlah_stok' => 40,
            ],
            [
                'product_id' => "MS3",
                'nama_produk' => "Samba OG Shoes - Black",
                'merk_produk' => 'ADIDAS',
                'harga' => 1200000.00,
                'jumlah_stok' => 40,
            ],
            [
                'product_id' => "MS4",
                'nama_produk' => "Air Jordan 1 Retro Mid - Black",
                'merk_produk' => 'NIKE',
                'harga' => 800000.00,
                'jumlah_stok' => 30,
            ],
            [
                'product_id' => "MS5",
                'nama_produk' => "Dunk Low Retro - White",
                'merk_produk' => 'NIKE',
                'harga' => 774500.00,
                'jumlah_stok' => 35,
            ],
            [
                'product_id' => "MS6",
                'nama_produk' => "Chuck Taylor All Star High Top - Black",
                'merk_produk' => 'CONVERSE',
                'harga' => 899000.00,
                'jumlah_stok' => 45,
            ],
            [
                'product_id' => "MS7",
                'nama_produk' => "Old Skool Classic - Black/White",
                'merk_produk' => 'VANS',
                'harga' => 980000.00,
                'jumlah_stok' => 40,
            ],
            [
                'product_id' => "MS8",
                'nama_produk' => "1906 Unisex Lifestyle Shoes - White Silver",
                'merk_produk' => 'NEW BALANCE',
                'harga' => 2599000.00,
                'jumlah_stok' => 20,
            ],
        ]);
    }
}
