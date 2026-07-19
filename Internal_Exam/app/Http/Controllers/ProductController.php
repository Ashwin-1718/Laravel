<?php

// app/Http/Controllers/ProductController.php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|unique:products',
            'product_name' => 'required',
            'product_quantity' => 'required',
            'product_sold' => 'required',
        ]);

        Product::create($request->only('product_id', 'product_name', 'product_quantity', 'product_sold'));

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function show(Product $product)
    {
        return view('show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'product_id' => 'required|unique:products,product_id,' . $product->id,
            'product_name' => 'required',
            'product_quantity' => 'required',
            'product_sold' => 'required',
        ]);

        $product->update($request->only('product_id', 'product_name', 'product_quantity', 'product_sold'));

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
