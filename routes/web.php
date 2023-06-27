<?php

use App\Http\Controllers\CheckInController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PortalController;
use App\Http\Controllers\DashAdminController;
use App\Http\Controllers\KonserController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\RegistrasiController;
use App\Models\DashAdmin;

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
// PORTAL
Route::resource('/', PortalController::class);
// ADMIN
Route::resource('/Dashboard/Admin', DashAdminController::class)->middleware('admin');
Route::resource('/Dashboard/CheckIn', CheckInController::class)->middleware('admin');
// USER
route::resource('/Dashboard/User', PembayaranController::class)->middleware('user');
// KONSER
route::resource('/Dashboard/Konser', KonserController::class);
route::get('/Dashboard/Konser/{Konser:id}', [KonserController::class, 'prosespesan']);
// LOGIN
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'proses']);
Route::post('/logout', [LoginController::class, 'logout']);
// REGISTRASI
Route::get('/registrasi', [RegistrasiController::class, 'create'])->name('registrasi')->middleware('guest');
Route::post('/registrasi', [RegistrasiController::class, 'store']);
