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
    public function index()
{
    $products = Product::latest()->paginate(10);
    return view('products.index', compact('products'));
}

public function create()
{
    return view('products.create');
}

public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'detail' => 'required',
        'price' => 'required|numeric',
    ]);

    Product::create($request->all());

    return redirect()->route('products.index')->with('success', 'Product created successfully.');
}

public function edit(Product $product)
{
    return view('products.edit', compact('product'));
}

public function update(Request $request, Product $product)
{
    $request->validate([
        'title' => 'required',
        'detail' => 'required',
        'price' => 'required|numeric',
    ]);

    $product->update($request->all());

    return redirect()->route('products.index')->with('success', 'Product updated successfully.');
}

public function destroy(Product $product)
{
    $product->delete();

    return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
}

}
