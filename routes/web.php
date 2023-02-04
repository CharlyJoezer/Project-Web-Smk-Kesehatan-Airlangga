<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;

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



// AUTH LOGIN - LOGOUT
Route::middleware('guest')->group(function(){
    Route::get('/', [AuthController::class, 'viewLogin'])->name('login')->middleware('guest');
    Route::POST('/auth/login', [AuthController::class, 'authLogin'])->middleware('guest');
});


Route::middleware('auth')->group(function(){
    Route::get('/auth/logout', [AuthController::class, 'authLogout'])->middleware('auth');
    
    // LIST ROUTE DASHBOARD
    Route::get('/dashboard', [MainController::class, 'viewDashboard']);
    Route::get('/dashboard/form-pemeriksaan', [MainController::class, 'formpemeriksaan']);
    Route::get('/dashboard/form-pemeriksaan/view-tabel', [MainController::class, 'DataFormPemeriksaan']);
    Route::get('/dashboard/buat-account', [AuthController::class, 'viewRegister']);
    Route::POST('/dashboard/buat-akun/auth/register', [AuthController::class, 'authRegister']);
});