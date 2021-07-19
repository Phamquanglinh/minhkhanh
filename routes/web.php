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
Route::get('/', [\App\Http\Controllers\IndexController::class,'render'])->name("index");
Route::get('/category/{name}/{page?}', [\App\Http\Controllers\CategoryController::class,'render','name','page'])->where(['name','page'])->name("category");
Route::get('/tag/{name}/{page?}', [\App\Http\Controllers\TagController::class,'render','name','page'])->where(['name','page'])->name("tag");
Route::get('/products/{name}',[\App\Http\Controllers\ProductController::class,'render','name'])->where(['name'])->name("products");
Route::get('/faq.html',[\App\Http\Controllers\FaqController::class,'render'])->name('faq');
Route::get('/contact.html',function (){
    return view("frontend.contact");
})->name("contact");
Route::get('/recommend.html',[\App\Http\Controllers\ListPostController::class,'render'])->name('recommend');
Route::get('/post/{slug}',[\App\Http\Controllers\PostController::class,'render','slug'])->where(['slug'])->name('post');
Route::get('/profile.html',[\App\Http\Controllers\CustomerController::class,'index'])->name("profile.index");
Route::post('/profile-save.html',[\App\Http\Controllers\CustomerController::class,'save'])->name("profile.store");
Route::get('/cart.html',[\App\Http\Controllers\CartController::class,'index'])->name("cart");
Route::post('/cart.html',[\App\Http\Controllers\CartController::class,'calPrice'])->name('cart.updatePrice');
Route::any('/cart-add.html',[\App\Http\Controllers\CartController::class,'addCart'])->name('cart.addCart');
Route::post('/order-add.html',[\App\Http\Controllers\OrderController::class,'store'])->name('order.add');
