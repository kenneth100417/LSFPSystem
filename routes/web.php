<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;

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

Route::get('/', [UserController::class, 'index'])->name('login')->middleware('guest');
Route::get('/register', [UserController::class, 'register']);
Route::get('/verify', [UserController::class, 'verify']);
Route::post('/add_user', [UserController::class, 'add_user']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);


Route::get('/user_dashboard', [UserController::class, 'user_dashboard'])->middleware('auth')->name('user');
Route::get('/user_orders', [UserController::class, 'user_orders'])->middleware('auth');
Route::get('//user_profile', [UserController::class, 'user_profile'])->middleware('auth');

// admin pages
Route::get('/admin_dashboard', [UserController::class, 'admin_dashboard'])->middleware('auth')->name('admin');
Route::get('/admin_product_info', [UserController::class, 'admin_product_info'])->middleware('auth')->name('admin');
Route::get('/admin_orders', [UserController::class, 'admin_orders'])->middleware('auth')->name('admin');
Route::get('/admin_manage_account', [UserController::class, 'admin_manage_account'])->middleware('auth')->name('admin');
Route::get('/admin_users', [UserController::class, 'admin_users'])->middleware('auth')->name('admin');
Route::get('/admin_add_sales', [UserController::class, 'admin_add_sales'])->middleware('auth')->name('admin');


// admin product info pages
Route::get('/admin_product_info_inventory', [UserController::class, 'admin_product_info_inventory'])->middleware('auth')->name('admin');
Route::get('/admin_product_info_list', [UserController::class, 'admin_product_info_list'])->middleware('auth')->name('admin');
Route::get('/admin_product_info_reviews', [UserController::class, 'admin_product_info_reviews'])->middleware('auth')->name('admin');
Route::get('/admin_product_info_archived', [UserController::class, 'admin_product_info_archived'])->middleware('auth')->name('admin');

// admin orders pages
Route::get('/admin_orders_orderrequests', [UserController::class, 'admin_orders_orderrequests'])->middleware('auth')->name('admin');
Route::get('/admin_orders_inprocess', [UserController::class, 'admin_orders_inprocess'])->middleware('auth')->name('admin');
Route::get('/admin_orders_completed', [UserController::class, 'admin_orders_completed'])->middleware('auth')->name('admin');
Route::get('/admin_orders_cancelled', [UserController::class, 'admin_orders_cancelled'])->middleware('auth')->name('admin');

// otp verification routes
Route::get('/otp/verify', [UserController::class, 'otp_verify'])->name('otp.verify');
Route::post('/otp/verify_code', [UserController::class, 'verifyOtp'])->name('otp.verify_code');
Route::get('/otp/resend_code', [UserController::class, 'resendOtp'])->name('otp.resend');

Route::get('/user_toreceive', [UserController::class, 'user_toreceive'])->middleware('auth');
Route::get('/user_completed', [UserController::class, 'user_completed'])->middleware('auth');
Route::get('/user_cancelled', [UserController::class, 'user_cancelled'])->middleware('auth');

Route::put('/user_update', [UserController::class, 'update']);

// Category Route
Route::controller(App\Http\Controllers\Admin\CategoryController::class)->group(function(){
    Route::get('admin/category','index');
    Route::get('admin/category/add','add');

    Route::post('admin/category/add','store');
    Route::get('admin/category/{category}/edit','edit');
    Route::put('admin/category/{category}','update');
});

// Product Routs
Route::controller(App\Http\Controllers\Admin\ProductController::class)->group(function(){
    Route::get('admin/products','index');
    Route::get('admin/products/add','add');
    Route::post('admin/products','store');
    Route::get('admin/products/{product}/edit','edit');
    Route::put('admin/products/{product}','update');

});