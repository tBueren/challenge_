<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Taste;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $products = Product::all();
        $tastes = Taste::all();

        return view('index', ['products' => $products, 'tastes' => $tastes]);
    }
    public function add(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'color' => 'required',
            'price' => 'required',
            'taste_id' => 'required'
        ]);

        Product::create([
            'name' => $request->name,
            'color' => $request->color,
            'price' => $request->price * 100,
            'taste_id' => $request->taste_id,

        ]);

        return redirect('/products');
    }

    public function editPageIndex(Product $product): View
    {
        $tastes = Taste::all();
        return view('edit', ['product' => $product, 'tastes' => $tastes]);
    }

    public function edit(Product $product, Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'color' => 'required',
            'price' => 'required',
            'taste_id' => 'required',
        ]);

        $product->update([
            'name' => $request->name,
            'color' => $request->color,
            'price' => $request->price * 100,
            'taste_id' => $request->taste_id,

        ]);

        return redirect('/products');
    }

    public function delete(Product $product): RedirectResponse
    {
        $product->delete();

        return redirect('/products');
    }
}
