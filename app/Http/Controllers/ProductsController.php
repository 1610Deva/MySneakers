<?php

namespace App\Http\Controllers;

use App\Models\Products;

class ProductsController extends Controller
{
    public function show($product_id)
    {
        $product = Products::findOrFail($product_id);
        return view('nike-dunklow', compact('product'));
    }
}