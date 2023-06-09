<?php

use App\Http\Controllers\AdminProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ConnectController;
use PhpParser\Node\Name;

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


//HomePages
Route::get('/Customer/index',[HomePageController::class,'index']);
Route::get('/Customer/products',[HomePageController::class,'products']);
Route::get('/Customer/shoppingcart',[HomePageController::class,'shoppingcart']);
//Login&Register
Route::get('/Connect/register',[ConnectController::class,'register']);
Route::get('/Connect/login',[ConnectController::class,'login']);
//Connect
Route::post('/Connect/register-User', [ConnectController::class,'registerUser'])->name('register-User');
Route::post('/Connect/login-User', [ConnectController::class,'loginUser'])->name('login-User');
//Admin
Route::get('Admin/projects',[AdminProductController::class,'ProductList']);
Route::post('update',[AdminProductController::class,'update']);
Route::get('delete/{id}',[AdminProductController::class,'delete']);



