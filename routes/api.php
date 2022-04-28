<?php

use App\Http\Controllers\Tenant\BasesController;
use App\Http\Controllers\Tenant\BoardsController;
use App\Http\Controllers\Tenant\CoursesController;
use App\Http\Controllers\Tenant\SurveysController;
use App\Http\Controllers\Tenant\TeamsController;
use App\Http\Controllers\Tenant\UserDependentsController;
use App\Http\Controllers\Tenant\UserEducationsController;
use App\Http\Controllers\Tenant\UserLeaveBalancesController;
use App\Http\Controllers\Tenant\UsersController;
use App\Http\Controllers\Tenant\UserWorksController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->group(function ()  {
    // auth users
    Route::get('auth/user',fn () => request()->user());


    // users
    Route::prefix('users')->group(function () {
        Route::get('/', [UsersController::class,'index']);
        Route::get('/{user}', [UsersController::class,'show']);

        // users education
        Route::get('/education/{user}', [UserEducationsController::class,'index']);

        // users work
        Route::get('/work/{user}', [UserWorksController::class,'index']);

        // users dependent
        Route::get('/dependent/{user}', [UserDependentsController::class,'index']);

        // users leave balances
        Route::get('/leave/balances/{user}', [UserLeaveBalancesController::class,'index']);
    });


    // courses
    Route::prefix('courses')->group(function () {
        Route::get('/', [CoursesController::class,'index']);
    });

    // bases
    Route::prefix('bases')->group(function () {
        Route::get('/', [BasesController::class,'index']);
    });

    // surveys
    Route::prefix('surveys')->group(function () {
        Route::get('/', [SurveysController::class,'index']);
    });

    // boards
    Route::prefix('boards')->group(function () {
        Route::get('/', [BoardsController::class,'index']);
    });



    // teams
    Route::prefix('teams')->group(function () {
        Route::get('/', [TeamsController::class,'index']);
    });
});

