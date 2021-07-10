<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| http://pc.shop/
*/

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::group(['middleware' => ['Admin']], function () {
        Route::get('/product', [ProductController::class, 'index'])->name('product');
        Route::get('/product/store', [ProductController::class, 'store'])->name('productAdd');
        Route::get('/product/show/{id}', [ProductController::class, 'show'])->name('productEdit');

        Route::get('/product/del/{id}', [ProductController::class, 'del'])->name('productshow');
        Route::post('/product/create', [ProductController::class, 'create']);
        Route::post('/product/edit', [ProductController::class, 'edit']);

    });
    
    Route::get('/login', [AdminController::class, 'AdminLoginView'])->name('AdminLoginView');
    Route::post('/adminlogin',[AdminController::class,'AdminLogin']); 
});

Route::get('/',[HomeController::class,'Index']);