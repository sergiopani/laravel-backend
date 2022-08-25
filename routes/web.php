<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('categories');
    //return view('welcome');
});

Route::get('/products', function () {
    $products = [
        ['id' => 1, 'name' => "Product1", "price" => 100],
        ['id' => 2, 'name' => "Product2", "price" => 200]
    ];
    return view('products.index', compact('products'));
});

Route::get('/products/create', function () {
    return view('products.create');
});

Route::get('/products/{product}', function ($product) {
    //The second @param are the variables avalible in our view
    return view('products.show', compact('product'));
});


Route::get('/categories', function () {
    return response()->json(["Category 1", "Category 2"]);
    //return ["Category1", "Category2"];
});
