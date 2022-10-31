<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\SearchController;

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

Route::get('/', [HomeController::class, 'index'])->name('app.home');

Route::fallback( function() {
    return view('layout.not-found');
});

Route::get('/Help',   function() { return view('help'); })->name("app.help");

Route::get('/Login', [LoginController::class, 'index'])->name("app.login");

Route::get('/SignUp', [RegisterController::class, 'index'])->name("app.register");

Route::get('/Search', [SearchController::class, 'index'])->name("app.search");

