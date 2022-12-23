<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExperienceController;
use Illuminate\Support\Facades\Auth;
use App\Models\Cidade;

# Get cities and states when necessary, like register and edit profile
Route::get('/cidades/{estado_id}', function (Request $request) {
    $estado_id = $request->estado_id;
    $cities    = Cidade::where('estado_id', "=", $estado_id)->get()->toArray();
    return response()->json($cities);
});

# Routes grouped by name "app"
Route::name('app.')->group( function () {

    # Initial route
    Route::get('/',  function () { return view("home"); })->name('home');

    # Redirect user to register view and get data if register
    Route::get('/signup',  function () { return view('auth.register'); })->name("register");
    Route::post('/signup', [UserController::class, 'create'])->name('user.create');

    # If route not exist...
    Route::fallback( function()  { return view('errors.not-found'); })->name("not-found");

    # Redirect user to login view and authenticate
    Route::get('/login',   [LoginController::class, 'index'])->name("login");
    Route::post('/login',  [LoginController::class, 'store'])->name('login');
    Route::get('/logout',  [LoginController::class, 'logout'])->name('logout');

    # Make search
    Route::get('/search/jobs?q={job}',  [SearchController::class, 'index'])->name("search");

    # Routes involving user data
    Route::middleware('auth')->prefix('/user')->group( function () {

        Route::get('/edit', function () {
            return view('user.edit_profile.blade');
        })->name('edit-profile');

        Route::get('/create-profile', function (Request $request) {
            $user = Auth::user();
            $array_name = explode(" ", $user->name);

            // If already create profile, return "not found" view
            if(!$user->create_profile) {
                return view('user.profile', ['user' => $user, 'firstname' => $array_name[0]]);
            } else {
                return route('not-found');
            }

        })->name('create.profile');

        Route::post('/create-experience', [ExperienceController::class, 'create'])->name('create.experience');
    });
});
