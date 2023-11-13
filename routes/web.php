<?php

use App\Http\Controllers\login_controller;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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


Route::controller(login_controller::class)->group(function() {
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/satker', 'satker')->name('satker');
    Route::get('/shopping', 'shopping')->name('shopping');
   });
