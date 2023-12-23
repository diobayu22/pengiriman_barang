<?php

use App\Models\Supir;
use App\Models\Laporan;
use App\Models\Karyawan;
use App\Models\Kendaraan;
use App\Models\pelanggan;
use App\Models\Pengiriman;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SupirController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PengirimController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PengirimanController;

Route::get('/', function () {
    return view('auths.index');
});

// login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin']);
Route::get('/dashboard', [DashboardController::class, 'index']);
// logout
Route::get('/logout', [AuthController::class, 'logout']);
// Route::group(['middleware' => 'auth'], function () {
// dashboard
// supir
Route::get('/supir', [SupirController::class, 'index']);
Route::get('/supir/create', [SupirController::class, 'create']);
Route::post('/supir/store', [SupirController::class, 'store']);
Route::get('/supir/{id}/edit', [SupirController::class, 'edit']);
Route::put('/supir/{id}/edit', [SupirController::class, 'update']);
Route::get('/supir/{id}/delete', [SupirController::class, 'delete']);
// kendaraan
Route::get('/kendaraan', [KendaraanController::class, 'index']);
Route::post('/kendaraan/create', [KendaraanController::class, 'create']);
Route::get('/kendaraan/{id}/edit', [KendaraanController::class, 'edit']);
Route::put('/kendaraan/{id}/edit', [KendaraanController::class, 'update']);
Route::get('/kendaraan/{id}/delete', [KendaraanController::class, 'delete']);
// pelanggan
Route::get('/pelanggan', [pelangganController::class, 'index']);
Route::post('/pelanggan/create', [pelangganController::class, 'create']);
Route::get('/pelanggan/{id}/edit', [pelangganController::class, 'edit']);
Route::put('/pelanggan/{id}/edit', [pelangganController::class, 'update']);
Route::get('/pelanggan/{id}/delete', [pelangganController::class, 'delete']);
// pengguna
Route::get('/staff', [KaryawanController::class, 'index']);
Route::post('/staff/create', [KaryawanController::class, 'create']);
Route::get('/staff/{id}/edit', [KaryawanController::class, 'edit']);
Route::put('/staff/{id}/edit', [KaryawanController::class, 'update']);
Route::get('/staff/{id}/delete', [KaryawanController::class, 'delete']);
// pengiriman
Route::get('/pengiriman', [pengirimanController::class, 'index']);
Route::post('/pengiriman/create', [PengirimanController::class, 'create']);
Route::get('/pengiriman/{id}/edit', [pengirimanController::class, 'edit']);
Route::put('/pengiriman/{id}/edit', [pengirimanController::class, 'update']);
Route::get('/pengiriman/{id}/delete', [pengirimanController::class, 'delete']);
Route::get('/pengiriman/{id}/view', [pengirimanController::class, 'pdf']);
// lacak barang
Route::get('/lacak_barang', [pengirimanController::class, 'lacak']);
// });
// laporan
Route::get('/laporan', [LaporanController::class, 'index']);

// pengirim
Route::get('/pengirim', [PengirimController::class, 'index']);
Route::post('/pengirim/create', [PengirimController::class, 'create']);
