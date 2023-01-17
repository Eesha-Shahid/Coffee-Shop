<?php

use Illuminate\Support\Facades\Route;

// Imported controller

// Admin Section
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

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


Route::get('/', function () {
    return view('welcome');
});
  
Auth::routes();

// All Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {
    
    // home
    Route::get('/home', [HomeController::class, 'index'])->name('home'); 
});
  
// All Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    // home
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    Route::resource('orders', OrderController::class); 
});

Route::get('/menu',[ProductController::class,'displayProduct']);
Route::view("aboutUs","/aboutUs");
Route::view("contactUs","/contactUs");
Route::view("checkout","/checkout");   
Route::resource('orders', OrderController::class); 

// Cart Routes
Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ProductController::class, 'updateCart'])->name('update.cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
