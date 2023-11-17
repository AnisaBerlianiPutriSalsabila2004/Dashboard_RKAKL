<?php

use App\Http\Controllers\Auth\Login_Controller;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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


Route::controller(Login_Controller::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
    Route::get('/testing', 'test');
    Route::get('/testing2', 'test2');
    Route::get('/testing3', 'test3');
   });

   Route::get('/test',function(){
        User::create([
            'nama'=> 'test',
            'email'=> 'test@mail.com',
            'password'=> bcrypt('password'),
        ]);
   });