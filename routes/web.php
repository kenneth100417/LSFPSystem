<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmailController;

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

Route::controller(App\Http\Controllers\UserController::class)->group(function(){
    // User Routes
    Route::get('/', 'index' )->name('login')->middleware('guest');
    Route::get('/register',  'register');
    Route::get('/verify','verify');
    Route::post('/add_user',  'add_user');
    Route::post('/logout', 'logout');
    Route::post('/login', 'login');

    // otp verification routes
    Route::get('/otp/verify/{user_id}', 'otp_verify');
    Route::post('/otp/verify_code/{user_id}', 'verifyOtp');
    Route::get('/otp/resend_code/{user_id}', 'resendOtp');

    // change Password
     Route::post('/change-password', 'changePassword');

    // forgot-pass
    Route::get('/forgot-password', 'forgotPassword');
    Route::post('/forgot-password-verify', 'forgotPasswordVerify');
    Route::get('/recovery-verification/{user_id}', 'recoveryVerification');
    Route::post('/verify-recovery/{user_id}','verifyRecovery');
    Route::get('/create-new-password/{user_id}', 'createNewPassword');
    Route::post('/create-new-password/{user_id}', 'setNewPassword');
    Route::get('/resend-recovery-code/{user_id}', 'resendRecoveryCode');

    //send mail
    Route::post('/contact_mail', 'send_contact_mail');


});



Route::controller(App\Http\Controllers\UserController::class)->middleware(['auth', 'isAdmin'])->group(function(){

    // admin pages
    Route::get('/admin_dashboard', 'admin_dashboard')->name('admin');
    Route::get('/admin_product_info', 'admin_product_info');
    Route::get('/admin_orders', 'admin_orders');
    Route::get('/admin_manage_account',  'admin_manage_account');
    Route::get('/admin_users',  'admin_users');
    Route::get('/admin_add_sales', 'admin_add_sales');
    Route::get('/admin_generate_report', 'admin_generate_report');


    // admin product info pages
    Route::get('/admin_product_info_inventory','admin_product_info_inventory');
    Route::get('/admin_product_info_list','admin_product_info_list');
    Route::get('/admin_product_info_reviews', 'admin_product_info_reviews');
    Route::get('/admin_product_info_archived',  'admin_product_info_archived');

    // admin orders pages
    Route::get('/admin_orders_orderrequests',  'admin_orders_orderrequests');
    Route::get('/admin_orders_inprocess', 'admin_orders_inprocess');
    Route::get('/admin_orders_completed', 'admin_orders_completed');
    Route::get('/admin_orders_cancelled',  'admin_orders_cancelled');
    
    //vew product reviews
    Route::get('/product_reviews/{category_slug}/{product_slug}','viewProductReviews');

    //update profile
    Route::put('/admin_update',  'adminUpdate');

 
    // change password
    Route::put('/admin_change_pass','adminChangePass');

    // Add admin account
    Route::put('/add_admin','addAdmin');

    //Print Report
    Route::get('/inventory_pdf','inventoryPDF');
    Route::get('/best_selling_products_pdf','bestSellingProductsPDF');
    Route::get('/top_products_pdf','topProductsPDF');
    Route::get('/expired_products_pdf','expiredProductsPDF');
    Route::get('/daily_sales_pdf','dailySalesPDF');
    Route::get('/monthly_sales_pdf','monthlySalesPDF');
    Route::get('/annual_sales_pdf','annualSalesPDF');
    Route::get('/all_sales_pdf','allSalesPDF');
    Route::get('/all_report_pdf','allReportPDF');

    //notifcations
    Route::get('/admin_notifications','adminNotifications');


});


Route::controller(App\Http\Controllers\UserController::class)->middleware(['auth','isUser'])->group(function(){

      
    Route::get('/user_dashboard',  'user_dashboard')->name('user');
    Route::get('/user_products',  'user_products');
    Route::get('/user_orders',  'user_orders');
    Route::get('/user_profile',  'user_profile');
  
    Route::get('/user_toreceive',  'user_toreceive');
    Route::get('/user_completed', 'user_completed');
    Route::get('/user_cancelled',  'user_cancelled');

    Route::put('/user_update',  'update');
    // change password
    Route::put('/change_pass','changePass');

    // products
    Route::get('/product-view/{category_slug}/{product_slug}',  'productView');

    //cart
    Route::get('/cart',  'cart');
    Route::get('/notifications',  'notifications');

    // 
    Route::post('/buy/{product_id}', 'buyNow');
    
});

Route::controller(App\Http\Controllers\Product\RatingController::class)->middleware(['auth','isUser'])->group(function(){
    Route::put('/rate_product/{product_id}', 'addRating');
});



// Category Route
Route::controller(App\Http\Controllers\Admin\CategoryController::class)->middleware(['auth', 'isAdmin'])->group(function(){
    Route::get('admin/category','index');
    Route::get('admin/category/add','add');

    Route::post('admin/category/add','store');
    Route::get('admin/category/{category}/edit','edit');
    Route::put('admin/category/{category}','update');
});

// Product Routs
Route::controller(App\Http\Controllers\Admin\ProductController::class)->middleware(['auth', 'isAdmin'])->group(function(){
    Route::get('admin/products','index');
    Route::get('admin/products/add','add');
    Route::post('admin/products','store');
    Route::get('admin/products/{product}/edit','edit');
    Route::put('admin/products/{product}','update');

});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
