<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('throttle:3,10')->name('home');
Route::get('/mailentry', [App\Http\Controllers\HomeController::class, 'mailEntry'])->name('mailEntry');
Route::post('/sendmail', [App\Http\Controllers\HomeController::class, 'mailSend'])->name('mailSend');
