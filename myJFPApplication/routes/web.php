<?php

use App\Http\Controllers\Customer\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Customer\BookingController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\TrackingController;
use App\Http\Controllers\Admin\CourierController;
use App\Http\Controllers\Courier\DeliveryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\ManUserController;


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
//     return view('welcome');
// });

// Route untuk yessy
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/history', [HomeController::class, 'history'])->name('history');
Route::resource('booking',BookingController::class)->middleware('auth');
Route::resource('courier',DeliveryController::class);


// Route untuk Adam
Route::get('/admin', [AdminController::class, 'index'])->name('layout');
Route::resource('Tracking',TrackingController::class);
Route::resource('Transaction',TransactionController::class);
Route::resource('Courier',CourierController::class);


// Route untk daniel
Route::resource('ManagementCustomer', ManUserController::class);
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');

//sisain 2 baris aja biar rapi

