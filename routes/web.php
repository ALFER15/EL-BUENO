<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index-producto',function(){
    $product = Product::find(1);
    return $product;
});

Route::get('/index-producto',function(){
   $product = Product::orderBy('name')
   ->select('name','price')
   ->take(2)
   ->get();
   return $product;
});

Route::get('/index-producto-add',function(){
    $product = new Product();
    $product->name='Modelo';
    $product->product_number=123413;
    $product->desc='Cerveza de 200ml, oscura';
    $product->branch='Modelo';
    $product->price='23.50';
    $product->save();
    return $product;
});

Route::get('/product',[ProductController::class,'index'])->name('producto.index');

Route::get('/product-create',[ProductController::class,'create'])->name('producto.create');

Route::post('/product',[ProductController::class,'store'])->name('producto.store');

Route::get('/product-show/{product}',[ProductController::class,'show'])->name('producto.show');

Route::delete('/product-delete/{product}', [ProductController::class, 'delete'])->name('producto.delete');

Route::get('/product-update/{product}', [ProductController::class, 'updateView'])->name('producto.update');
