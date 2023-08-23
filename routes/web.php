<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesOrderController;
use App\Http\Controllers\SupplierController;
use App\Models\SaleOrder;
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
    return view('welcome');
});

//Products
Route::resource('products',ProductController::class);


//Suppliers
Route::resource('suppliers',SupplierController::class);


//SalesOrders
Route::resource('sales_orders',SalesOrderController::class);