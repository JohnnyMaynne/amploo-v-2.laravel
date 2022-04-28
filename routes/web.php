<?php

use App\Http\Controllers\Tenant\LoginController;
use App\Http\Controllers\Tenant\LogoutController;
use App\Http\Controllers\Tenant\RegisterController;
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

Route::prefix('auth')->group(function () {
    Route::post('login', LoginController::class);
    Route::post('logout', LogoutController::class);
    Route::post('register', RegisterController::class);
});
