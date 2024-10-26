<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AsetController;
use App\Http\Controllers\DashboardController;


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
