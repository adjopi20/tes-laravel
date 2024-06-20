<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;



class ProductController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth'); // Requires authentication for all methods
    // }
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function search(Request $request)
    {
    $name = $request->input('name');
    $products = Product::where('name', 'LIKE', '%' . $name . '%')->get();
    return view('products.index', compact('products'));
    }

    public function create(): View
    {
        return view('products.create');
    }

    public function store(ProductRequest $request)
    {
        $product = Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
        ]);


        return redirect()->route('products.index')->with('success', 'Product added successfully!');
    }

    public function show($id):View
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    public function edit($id):View
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function update(ProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $validated = $request->validated();
        $product->update($validated);
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product): RedirectResponse
    {
        // $product = Produ ct::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
