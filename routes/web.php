<?php

use App\Models\Cart;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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
// Route::get('/', function () {
//     return view('home');
// })->name('home');

//untuk read data home
Route::get('/', [ProductController::class, 'index'])->name('index');
//untuk read data Cart
Route::get('/cart', function () {
    return view('cart', [
        'carts' => Cart::all(),
    ]);
})->name('cart');
//untuk read data Product
Route::get('/product', [ProductController::class, 'product'])->name('product');
//untuk read data Category
Route::get('/category', [CategoryController::class, 'index'])->name('category');


//untuk add data Product
Route::get('/admin/add', [ProductController::class,'create']);
Route::post('/product', [ProductController::class, 'store']);
//untuk edit data Product
Route::get('/admin/{id}/edit',[ProductController::class, 'edit']);
Route::put('product/{id}', [ProductController::class, 'update']);
//untuk delete data Product
Route::get('admin/{id}/delete', [ProductController::class, 'destroy']);

//untuk add data Category
Route::get('/admin/addcategory', [CategoryController::class, 'create']);
Route::post('/category', [CategoryController::class, 'store']);
//untuk edit data Category
Route::get('/admin/{id}/editcategory',[CategoryController::class, 'edit']);
Route::put('category/{id}', [CategoryController::class, 'update']);
//untuk delete data Category
Route::get('admin/{id}/deletecategory', [CategoryController::class, 'destroy']);


//untuk menambahkan data ke cart
Route::resource ('/tocart', CartController::class);
//untuk delete data Cart
Route::get('cart/{id}/delete', [CartController::class, 'destroy']);

