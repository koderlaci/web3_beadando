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

Route::get("/market", [Controllers\PostController::class, 'create'])->name("market");

Route::get("/registration", [Controllers\RegistrationController::class, 'show'])->name("registration");

Route::post("/market", [Controllers\PostController::class, 'store']);
