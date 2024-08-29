<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::orderBy('id', 'desc')->paginate(25);
        return view('product.index-producto', compact('products'));
    }

    public function create(){
        return view('product.create-producto');
    }

    public function show($product){
        $productDetail = Product::find($product);
        return view('product.show-producto',compact('productDetail'));
    }

    public function store(Request $request){
        $product = new Product();
        $product->name = $request->name;
        $product->branch = $request->branch;
        $product->product_number = $request->product_number;
        $product->price = $request->price;
        $product->desc = $request->desc;
        $product->save();
        return redirect()->route('producto.index');
    }

    public function delete($product)
    {
        $productoborrado = Product::findOrFail($product);
        $productoborrado->delete();

        return redirect()->route('producto.index')->with('success', 'Producto borrado');
    }

    public function updateView($product){
        $LastProduct = Product::find($product);
        return view('product.update-producto', compact('LastProduct'));
    }
}