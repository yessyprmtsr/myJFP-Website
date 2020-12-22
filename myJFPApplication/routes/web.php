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
Route::resource('booking',BookingController::class)->middleware('auth');
Route::resource('courier',DeliveryController::class);


// Route untuk Adam
Route::get('/admin', [AdminController::class, 'index'])->name('layout');
Route::get('/admin/transaction', [TransactionController::class, 'index'])->name('transactionindex');
Route::get('/admin/transaction/update', [TransactionController::class, 'ngeupdate'])->name('ngeupdate');
Route::get('/admin/tracking', [TrackingController::class, 'index'])->name('trackingindex');
Route::get('/admin/tracking/update', [TrackingController::class, 'ngeupdate'])->name('trackingupdate');
Route::get('/admin/tracking/create', [TrackingController::class, 'create'])->name('trackingcreate');
Route::get('/admin/mancourier', [CourierController::class, 'index'])->name('courierindex');
Route::get('/admin/mancourier/update', [CourierController::class, 'ngeupdate'])->name('couriercreate');
Route::get('/admin/mancourier/create', [CourierController::class, 'create'])->name('couriercreate');


// Route untk daniel



//sisain 2 baris aja biar rapi

