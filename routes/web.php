<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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


Route::get('/', [HomeController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

Route::get('/redirect', [App\Http\Controllers\HomeController::class, 'redirect'])->middleware('auth', 'verified');

//catagory
Route::get('/view_catagory', [App\Http\Controllers\AdminController::class, 'view_catagory']);
Route::post('/add_catagory', [App\Http\Controllers\AdminController::class, 'add_catagory']);
Route::get('/delete_catagory/{id}', [App\Http\Controllers\AdminController::class, 'delete_catagory']);

//product
Route::get('/view_product', [App\Http\Controllers\AdminController::class, 'view_product']);
Route::post('/add_product', [App\Http\Controllers\AdminController::class, 'add_product']);
Route::get('/show_product', [App\Http\Controllers\AdminController::class, 'show_product']);
Route::get('/delete_product/{id}', [App\Http\Controllers\AdminController::class, 'delete_product']);
Route::get('/update_product/{id}', [App\Http\Controllers\AdminController::class, 'update_product']);
Route::post('/update_product_confirm/{id}', [App\Http\Controllers\AdminController::class, 'update_product_confirm']);
Route::get('/product_details/{id}', [App\Http\Controllers\HomeController::class, 'product_detail']);

//cart
Route::post('/add_cart/{id}', [App\Http\Controllers\HomeController::class, 'add_cart']);
Route::get('/show_cart', [App\Http\Controllers\HomeController::class, 'show_cart']);
Route::get('/remove_cart/{id}', [App\Http\Controllers\HomeController::class, 'remove_cart']);
Route::get('/cash_order', [App\Http\Controllers\HomeController::class, 'cash_order']);
//api stripe
Route::get('/stripe/{totalprice}', [App\Http\Controllers\HomeController::class, 'stripe']);
Route::post('stripe/{totalprice}',[App\Http\Controllers\HomeController::class, 'stripePost'])->name('stripe.post');

//order
Route::get('/order', [App\Http\Controllers\AdminController::class, 'order']);
Route::get('/delivered/{id}', [App\Http\Controllers\AdminController::class, 'delivered']);
Route::get('/print_pdf/{id}', [App\Http\Controllers\AdminController::class, 'print_pdf']);
Route::get('/send_email/{id}', [App\Http\Controllers\AdminController::class, 'send_email']);
Route::post('/send_user_email/{id}', [App\Http\Controllers\AdminController::class, 'send_user_email']);
Route::get('/search', [App\Http\Controllers\AdminController::class, 'searchdata']);

//comment
Route::post('/add_comment', [App\Http\Controllers\HomeController::class, 'add_comment']);
Route::post('/add_reply', [App\Http\Controllers\HomeController::class, 'add_reply']);
