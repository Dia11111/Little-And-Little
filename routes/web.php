<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\IndexController;


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

Route::get('/', [IndexController::class, 'home']);
Route::get('/su-kien',[IndexController::class, 'sukien'])->name('sukien');
Route::get('/lien-he',[IndexController::class, 'lienhe'])->name('lienhe');
Route::get('/xem-su-kien/{slug}',[IndexController::class, 'xemsukien']);
Route::get('/thanh-toan',[IndexController::class, 'pay'])->name('pay');
Route::get('/thanh-toan-thanh-cong',[IndexController::class, 'successpay'])->name('successpay');
Route::get('/chi-tiet-ve',[IndexController::class, 'chitietve'])->name('chitietve');
Route::get('/in-don-ve/{checkout_code}',[IndexController::class, 'indonve'])->name('indonve');

Route::post('/dat-ve',[IndexController::class, 'checkout'])->name('checkout');
Route::post('/dat-ve-thanh-cong',[IndexController::class, 'checkout_success'])->name('checkout_success');
Route::post('/gui-lien-he',[IndexController::class, 'sendEmail'])->name('contact.send');

Auth::routes();

Route::middleware('admin')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('/sukien', EventController::class);
    Route::resource('/ve', TicketController::class);
});
