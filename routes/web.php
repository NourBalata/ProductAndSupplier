<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesOrderController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\WriterController;
use App\Models\Product;
use App\Models\SaleOrder;
use App\Models\Supplier;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.index');
});


//Products
Route::resource('products',ProductController::class);

Route::get('/index2', function(){
    $data = Supplier::get();
    return view('suppliers.index2',compact('data'));
})->name('/index2');

Route::get('/index2/SalesOrder', function(){
    $data = SaleOrder::get();
    $suppliers=Supplier::get();
    $products=Product::get();
    return view('sales_order.index2',compact('data','suppliers','products'));
})->name('SalesOrder');




Route::get('/index2/products', function(){
    $data = Product::get();
    return view('products.index2',compact('data'));
})->name('products');


//Suppliers
Route::resource('suppliers',SupplierController::class);
//languages
Route::resource('languages',LanguageController::class);
//statuses
Route::resource('statuses',StatusController::class);
//categories
Route::resource('categories',CategoryController::class);
//types
Route::resource('types',TypeController::class);
//writers
Route::resource('writers',WriterController::class);
//SalesOrders
Route::resource('sales_orders',SalesOrderController::class);

Route::get('/get-product-names', [SalesOrderController::class,'getProductNames'])->name('get-product-names');



Route::get('/supplier_data/{id}', [SalesOrderController::class, 'get_supplier_data']);
Route::get('/product_data/{id}', [SalesOrderController::class, 'get_product_data']);




//News
Route::get('/news', function () {
    return view('News.index');
})->name('news');

//categories
Route::resource('news',NewController::class);