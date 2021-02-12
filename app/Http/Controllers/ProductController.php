<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(5);
        return view('welcome',compact('products'));
    }
    public function create(){
        return view('create_product');
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return redirect('/');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/');

    }
}
