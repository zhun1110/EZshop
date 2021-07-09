<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\HomeController;
use App\Models\AdminAccount;

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
        Route::get('/home', [AdminController::class, 'index'])->name('adminhome');
    });
    Route::get('/login', [AdminController::class, 'AdminLoginView'])->name('AdminLoginView');
    Route::post('/adminlogin',[AdminController::class,'AdminLogin']); 
});

Route::get('/',[HomeController::class,'Index']);