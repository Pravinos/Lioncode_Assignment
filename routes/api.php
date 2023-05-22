<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestCompaniesController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth:sanctum')->get('/getcompanies', [TestCompaniesController::class, 'getCompanies']);

Route::middleware('auth:sanctum')->get('/users/{user_id}/eventsA', [UserController::class, 'getEventsA']);

Route::middleware('auth:sanctum')->get('/users/{user_id}/eventsB', [UserController::class, 'getEventsB']);


