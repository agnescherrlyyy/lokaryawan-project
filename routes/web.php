<?php

use App\Http\Controllers\AbsenkuController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\ApprovedCutiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CutiKhususController;
use App\Http\Controllers\CutiTahunanController;
use App\Http\Controllers\DashboardLokaryawan;
use App\Http\Controllers\GajikuController;
use App\Http\Controllers\JadwalkuController;
use App\Http\Controllers\KodeBookingkuController;
use App\Http\Controllers\LemburkuController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ProfileUserController;
use App\Http\Controllers\SeputarInfoController;
use App\Http\Controllers\SlipGajiPDFController;
use App\Http\Controllers\SlipTiketKonfirmasiController;
use App\Http\Controllers\TiketkuController;
use Illuminate\Support\Facades\Route;

// Route::middleware(['auth.custom'])->group(function () {
// });
Route::get('/', [AuthController::class, 'index']);
Route::get('/login', [AuthController::class, 'index']);
Route::get('/start-session', [AuthController::class, 'start_session']);
Route::get('/end-session', [AuthController::class, 'end_session']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::middleware(['check_login'])->group(function () {
    Route::get('/dashboard', [DashboardLokaryawan::class, 'index'])->name('dashboard.index');

    Route::get('/jadwalku', [JadwalkuController::class, 'index']);
    Route::get('/absenku', [AbsenkuController::class, 'index']);
    Route::get('/lemburku', [LemburkuController::class, 'index']);

    Route::get('/gajiku', [GajikuController::class, 'index']);
    Route::post('/gajiku/get_gajiku', [GajikuController::class, 'get_gajiku']);

    Route::get('/tiket', [TiketkuController::class, 'index']);
    Route::get('/tiket/konfirmasi-pembayaran', [SlipTiketKonfirmasiController::class, 'index']);
    Route::get('/tiket/kodebookingku', [KodeBookingkuController::class, 'index']);

    Route::get('/cutitahunan', [CutiTahunanController::class, 'index']);
    Route::get('/cuti/permintaan-cutitahunan', [CutiTahunanController::class, 'permintaanCuti']);
    Route::get('/cuti/riwayat-cutitahunan', [CutiTahunanController::class, 'riwayatCuti']);

    Route::get('/cutikhusus', [CutiKhususController::class, 'index']);

    Route::get('/profile-user', [ProfileUserController::class, 'index']);

    Route::get('/notification', [NotificationController::class, 'index']);
    Route::get('/approved-cuti', [ApprovedCutiController::class, 'index']);
    Route::get('/approved-cuti/{$id}', [ApprovedCutiController::class, 'show']);

    Route::get('/seputar-info', [SeputarInfoController::class, 'index']);
    Route::get('/detail-info', [SeputarInfoController::class, 'detailList']);

    Route::post('/encrypt-password', [SlipGajiPDFController::class, 'encryptPassword']);
    Route::get('/generate-pdf', [SlipGajiPDFController::class, 'generatePDF']);
    Route::get('/slip-gaji-pdf', [PDFController::class, 'generatePDF']);
});

Route::get('/login-admin', [AdminAuthController::class, 'index']);