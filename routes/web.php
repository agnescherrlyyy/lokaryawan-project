<?php

use App\Http\Controllers\AbsenkuController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CutiTahunanController;
use App\Http\Controllers\DashboardLokaryawan;
use App\Http\Controllers\GajikuController;
use App\Http\Controllers\JadwalkuController;
use App\Http\Controllers\KodeBookingkuController;
use App\Http\Controllers\LemburkuController;
use App\Http\Controllers\SlipTiketKonfirmasiController;
use App\Http\Controllers\TiketkuController;
use Illuminate\Support\Facades\Route;

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

// Route::middleware(['auth.custom'])->group(function () {
// });
Route::get('/', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login'])->name('login.check_login');
Route::get('/logout', [AuthController::class, 'logout']);


// Route::middleware(['auth.custom'])->group(function () {
    Route::get('/dashboard', [DashboardLokaryawan::class, 'index'])->name('dashboard.index');

    Route::get('/jadwalku', [JadwalkuController::class, 'index']);
    Route::get('/absenku', [AbsenkuController::class, 'index']);
    Route::get('/lemburku', [LemburkuController::class, 'index']);

    Route::get('/gajiku', [GajikuController::class, 'index']);

    Route::get('/tiket', [TiketkuController::class, 'index']);
    Route::get('/tiket/konfirmasi-pembayaran', [SlipTiketKonfirmasiController::class, 'index']);
    Route::get('/tiket/kodebookingku', [KodeBookingkuController::class, 'index']);

    Route::get('/cutitahunan', [CutiTahunanController::class, 'index']);
    Route::get('/cuti/permintaan-cutitahunan', [CutiTahunanController::class, 'permintaanCuti']);
    Route::get('/cuti/riwayat-cutitahunan', [CutiTahunanController::class, 'riwayatCuti']);
// });