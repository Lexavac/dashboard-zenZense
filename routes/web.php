<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DarkModeController;
use App\Http\Controllers\ColorSchemeController;

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

Route::get('dark-mode-switcher', [DarkModeController::class, 'switch'])->name('dark-mode-switcher');
Route::get('color-scheme-switcher/{color_scheme}', [ColorSchemeController::class, 'switch'])->name('color-scheme-switcher');

Route::controller(AuthController::class)->middleware('loggedin')->group(function() {
    Route::get('login', 'loginView')->name('login.index');
    Route::post('login', 'login')->name('login.check');
});

Route::middleware('auth')->group(function() {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::controller(PageController::class)->group(function() {
        Route::get('/', 'dashboardOverview1')->name('dashboard-overview-1');
        Route::get('add-product-page', 'addProduct')->name('add-product');
        Route::get('categories-page', 'categories')->name('categories');
        Route::get('login-page', 'login')->name('login');
        Route::get('product-page', 'productList')->name('product-list');
        Route::get('categories-product-page', 'productGrid')->name('product-grid');
        Route::get('register-page', 'register')->name('register');
        Route::get('reviews-page', 'reviews')->name('reviews');
        Route::get('seller-page', 'sellerList')->name('seller-list');
        Route::get('seller-detail-page', 'sellerDetail')->name('seller-detail');
        Route::get('transaction-page', 'transactionList')->name('transaction-list');
        Route::get('transaction-detail-page', 'transactionDetail')->name('transaction-detail');
        Route::get('customer-page', 'usersLayout1')->name('users-layout-1');


        Route::get('profile-page', 'profileOverview2')->name('profile-overview');
        Route::get('update-profile-page', 'updateProfile')->name('update-profile');
        Route::get('change-password-page', 'changePassword')->name('change-password');
        Route::get('form-cust-page', 'formcustomer')->name('form-cust');
        Route::get('edit-customer-page', 'editcustomer')->name('edit-cust');
        Route::get('edit-product-page', 'editproduct')->name('edit-pro');
        Route::get('form-category-page', 'formcategories')->name('form-cat');
        Route::get('change-status', 'statuspayment')->name('status');
    });
});
