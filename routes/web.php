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
Route::get('/admin_dashboard', [UserController::class, 'admin_dashboard'])->middleware('auth')->name('home');



