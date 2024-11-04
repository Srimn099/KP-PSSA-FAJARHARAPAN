<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AsetController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengelolaController;
use App\Http\Controllers\PostkeuanganController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TransaksiController;

// Authentication routes

Route::get('/', function () {
    return view('login');
});

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
        Route::post('/store', 'store');
        Route::post('/update/{transaksi}', 'update');
        Route::post('/delete/{transaksi}', 'delete');
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
        Route::post('/update/{poskeuangan}', 'update');
        Route::post('/delete/{poskeuangan}', 'delete');
    });
});
