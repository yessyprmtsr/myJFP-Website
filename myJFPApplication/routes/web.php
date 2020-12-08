<?php

use App\Http\Controllers\Customer\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Customer\BookingController;
use Illuminate\Support\Facades\Route;


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
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::resource('booking',BookingController::class);


// Route untuk Adam
Route::get('/admin', [AdminController::class, 'index'])->name('layout');


// Route untk daniel



//sisain 2 baris aja biar rapi
