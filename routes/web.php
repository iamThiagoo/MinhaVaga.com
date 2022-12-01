<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VagaController;
use App\Models\Cidade;

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
Route::fallback( function() { return view('errors.not-found'); })->name("app.not-found");

Route::get('/Help', function() { return view('help'); })->name("app.help");

Route::get('/SignUp', [RegisterController::class, 'index'])->name("app.register");
Route::post('/SignUp', [UserController::class, 'create'])->name('user.create');

Route::get('/Login',  [LoginController::class, 'index'])->name("app.login");
Route::post('/Login', [LoginController::class, 'store'])->name('app.login');

Route::get('/Search', [SearchController::class, 'index'])->name("app.search");
Route::get('/profile', [UserController::class, 'createProfile'])->name('app.create-profile');

Route::get('/cidades/{estado_id}', function(Request $request) {
    $estado_id = $request->estado_id;
    $cities    = App\Models\Cidade::where('estado_id', "=", $estado_id)->get()->toArray();
    return response()->json($cities);
});