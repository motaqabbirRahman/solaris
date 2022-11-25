<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

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
//     return view('frontend.welcome');
    
// });
// Backend Routes
Route::get('/admin', [AdminController::class,'index']);
Route::get('/dashboard',[SuperAdminController::class,'dashboard']);
Route::post('/admin-dashboard',[AdminController::class,'show_dashboard']);
Route::get('/logout',[SuperAdminController::class,'logout']);
//products
Route::resource('/products',ProductController::class);
Route::get('/product-status{product}',[ProductController::class,'change_status']);

//Category.Resource route
Route::resource('/categories',CategoryController::class);
// Frontend Routes
Route::get('/',[HomeController::class,'index']);
Route::get('/view-details{id}',[HomeController::class,'view_details']);

// Cart
