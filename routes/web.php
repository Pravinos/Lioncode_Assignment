<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestCompaniesController;
// use App\Http\Controllers\MyAccountController;

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

Route::get('/', function () {
    return view('auth/register');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/myaccount', [UserController::class, 'myAccount'])->name('myaccount')->middleware('auth');

Route::middleware('auth:sanctum')->get('/getcompanies', [TestCompaniesController::class, 'getCompanies']);

Route::middleware('auth:sanctum')->get('/viewcompanies', [TestCompaniesController::class, 'viewCompanies'])->name('viewcompanies');

// Route::middleware('auth')->get('/myaccount', [MyAccountController::class, 'myAccount'])->name('myaccount');
