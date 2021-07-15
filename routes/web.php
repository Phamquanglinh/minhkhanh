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
Route::get('/products/{name}',[\App\Http\Controllers\ProductController::class,'render','name'])->where(['name'])->name("products");
Route::group(['middleware' => 'locale'], function() {
    Route::get('change-language/{language}', [\App\Http\Controllers\HomeController::class,'changeLanguage'])
        ->name('user.change-language');
});
