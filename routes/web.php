<?php

use App\Http\Controllers\Auth\Authentication;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Landing;
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

Route::controller(Landing::class)->group(function () {
    Route::get('/', 'index');
});

Route::controller(Dashboard::class)->group(function () {
    Route::get('dashboard', 'index');
});

Route::controller(Authentication::class)->group(function () {
    Route::get('login', 'index');
    Route::post('login-post', 'authenticate')->name('login.post');
});
