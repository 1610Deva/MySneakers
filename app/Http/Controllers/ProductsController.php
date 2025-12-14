<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    
    public function home()
    {
        // Ambil semua produk dari DB
        $products = \App\Models\Products::all();

        return view('home', compact('products'));
    }


    public function show($product_id)
    {
        // Mapping product_id ke nama view
        $viewMap = [
            'MS1' => 'nike-air-force1',
            'MS2' => 'adidas-samba-og-white',
            'MS3' => 'adidas-samba-og',
            'MS4' => 'nike-air-jordan-retro1',
            'MS5' => 'nike-dunklow',
            'MS6' => 'chuck-taylor-allstar',
            'MS7' => 'vans-oldschool-classic',
            'MS8' => 'NB-1906-unisex',
        ];

        if (!isset($viewMap[$product_id])) {
            abort(404, 'Produk tidak ditemukan');
        }

        // Ambil data produk dari database jika perlu
        $product = \App\Models\Products::find($product_id);

        return view($viewMap[$product_id], compact('product'));
    }

}