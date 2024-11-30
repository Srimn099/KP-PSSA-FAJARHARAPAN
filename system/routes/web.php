<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AsetController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PengelolaController;
use App\Http\Controllers\PostkeuanganController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TransaksiController;

// Authentication routes

Route::controller(AuthController::class)->group(function () {
    Route::get('/', 'index')->name('login');
    Route::post('/aksiLogin', 'aksiLogin');
    Route::post('/logout', 'logout');
});

Route::middleware('auth:admin')->group(function () {
    // Dashboard controller
    Route::prefix('/dashboard')->group(function () {
        Route::controller(DashboardController::class)->group(function () {
            Route::get('/', 'index');
        });
    });

    // Aset controller
    Route::prefix('/aset')->group(function () {
        Route::controller(AsetController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/create', 'create');
            Route::post('/store', 'store');
            Route::get('/edit/{aset}', 'edit');
            Route::post('/update/{aset}', 'update');
            Route::post('/delete/{aset}', 'delete');
        });
    });

    // Kategori controller
    Route::prefix('/kategori')->group(function () {
        Route::controller(KategoriController::class)->group(function () {
            Route::get('/', 'index');
            Route::post('/store', 'store');
            Route::post('/update/{kategori}', 'update');
            Route::post('/delete/{kategori}', 'delete');

        });
    });

    // Poestkeuangan controller
    Route::prefix('/keuangan')->group(function () {
        Route::controller(PostkeuanganController::class)->group(function () {
            Route::get('/', 'index');
            Route::post('/store', 'store');
            Route::post('/update/{poskeuangan}', 'update');
            Route::post('/delete/{poskeuangan}', 'delete');
        });
    });
    // Transaksi controller
    Route::prefix('/transaksi')->group(function () {
        Route::controller(TransaksiController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/create', 'create');
            Route::post('/store', 'store');
            Route::get('/edit/{transaksi}', 'edit');
            Route::post('/update/{transaksi}', 'update');
            Route::post('/delete/{transaksi}', 'delete');
            Route::get('/getDataKategori/{id}', 'getDataKategori');
        });
    });

    // Siswa controller
    Route::prefix('/siswa')->group(function () {
        Route::controller(SiswaController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/create', 'create');
            Route::post('/store', 'store');
            Route::get('/edit/{siswa}', 'edit');
            Route::post('/update/{siswa}', 'update');
            Route::post('/delete/{siswa}', 'delete');
        });
    });

    // Pengelola controller

    Route::prefix('/pengelola')->group(function () {
        Route::controller(PengelolaController::class)->group(function () {
            Route::get('/', 'index');
            Route::post('/store', 'store');
            Route::post('/update/{pengelola}', 'update');
            Route::post('/delete/{pengelola}', 'delete');
        });
    });
    // Pengelola controller
    Route::prefix('/laporan')->group(function () {
        Route::controller(LaporanController::class)->group(function () {
            Route::get('/laptransaksi', 'laptransaksi');
            Route::post('/transaksiCetak', 'transaksiCetak');
            Route::get('/laprapb', 'laprapb');
            Route::post('/cetakLaprapb', 'cetakLaprapb');
            Route::get('/cetaksiswa', 'cetaksiswa');
        });
    });
});
