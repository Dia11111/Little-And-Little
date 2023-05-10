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
Route::post('/gui-lien-he',[IndexController::class, 'sendEmail'])->name('contact.send');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('/sukien', EventController::class);
Route::resource('/ve', TicketController::class);
