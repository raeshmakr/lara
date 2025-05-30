<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Show all products in a web view
    public function indexWeb()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }
}
