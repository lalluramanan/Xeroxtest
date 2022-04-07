<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
    return view('LandingPage');
});

Route::get('login',[LoginController::class,'ShowLogin'])->name('login');

Route::post('login-submit',[LoginController::class,'validate'])->name('login-submit');

Route::get('addcompany',[CompanyController::class,'addCompany'])->name('addcompany');
