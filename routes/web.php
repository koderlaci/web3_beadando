<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

//home

Route::get("/welcome", [Controllers\WelcomeController::class, 'index'])->name("home");

//user controls

Route::get("/login", [Controllers\LoginController::class, 'show'])->name("loginView");

Route::post("/login", [Controllers\LoginController::class, 'login'])->name("login");

Route::get("/logout", [Controllers\LoginController::class, 'logout'])->name("logout");

Route::get("/registration", [Controllers\RegistrationController::class, 'show'])->name("registrationView");

Route::post("/registration", [Controllers\RegistrationController::class, 'registration'])->name("registration");

//post controls

Route::get("/market", [Controllers\PostController::class, 'show'])->name("market");

Route::get("/sellfish", [Controllers\PostController::class, 'showFish'])->name("sellfish");

Route::post("/sell", [Controllers\PostController::class, 'create'])->name("sell");

Route::post("/buy", [Controllers\PostController::class, 'buyFish'])->name("buy");

Route::post("/market", [Controllers\PostController::class, 'store']);

//myfishes controls

Route::get("/myfishes", [Controllers\MyFishesController::class, 'show'])->name("myfishes");

Route::post("/myfishes", [Controllers\MyFishesController::class, 'update'])->name("update");

Route::get("/fishcollection", [Controllers\MyFishesController::class, 'showFishCollection'])->name("fishCollection");


