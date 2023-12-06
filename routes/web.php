<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AjaxController;



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
Route::group(['middleware'=>'sitesetting'], function(){

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/products/women', [PageController::class, 'products'])->name('women-products');
Route::get('/products/child', [PageController::class, 'products'])->name('child-products');
Route::get('/products/men', [PageController::class, 'products'])->name('men-products');
Route::get('/products/discount', [PageController::class, 'products'])->name('discount-products');


Route::get('/product/detail/{slug}', [PageController::class, 'productDetail'])->name('product-detail');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [AjaxController::class, 'contactsave'])->name('contact_save');
Route::get('/cart', [PageController::class, 'cart'])->name('cart');

});





