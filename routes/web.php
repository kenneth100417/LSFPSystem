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


Route::get('/user_dashboard', [UserController::class, 'user_dashboard'])->middleware('auth')->name('home');
Route::get('/user_orders', [UserController::class, 'user_orders'])->middleware('auth');
Route::get('//user_profile', [UserController::class, 'user_profile'])->middleware('auth');
Route::get('/admin_dashboard', [UserController::class, 'admin_dashboard'])->middleware('auth')->name('home');
Route::get('/otp/verify', [UserController::class, 'otp_verify'])->name('otp.verify');
Route::post('/otp/verify_code', [UserController::class, 'verifyOtp'])->name('otp.verify_code');
Route::get('/otp/resend_code', [UserController::class, 'resendOtp'])->name('otp.resend');

Route::get('/user_toreceive', [UserController::class, 'user_toreceive'])->middleware('auth');
Route::get('/user_completed', [UserController::class, 'user_completed'])->middleware('auth');
Route::get('/user_cancelled', [UserController::class, 'user_cancelled'])->middleware('auth');

Route::put('/user_update', [UserController::class, 'update']);

