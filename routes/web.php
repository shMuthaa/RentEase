<?php

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\TenantController;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/tenants',TenantController::class);
Route::resource('/payments',PaymentController::class);
Route::resource('/rooms',RoomController::class);