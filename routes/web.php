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

Route::get("/welcome", [Controllers\WelcomeController::class, 'index'])->name("home");

Route::get("/market", [Controllers\PostController::class, 'show'])->name("market");

Route::get("/sellfish", [Controllers\PostController::class, 'showFish'])->name("sellfish");

Route::post("/sell", [Controllers\PostController::class, 'create'])->name("sell");

Route::get("/login", [Controllers\LoginController::class, 'show'])->name("loginView");

Route::post("/login", [Controllers\LoginController::class, 'login'])->name("login");

Route::get("/logout", [Controllers\LogoutController::class, 'logout'])->name("logout");

Route::get("/registration", [Controllers\RegistrationController::class, 'show'])->name("registrationView");

Route::post("/registration", [Controllers\RegistrationController::class, 'registration'])->name("registration");



Route::post("/market", [Controllers\PostController::class, 'store']);
