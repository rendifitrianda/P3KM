<?php

use App\Http\Controllers\Operator\CatatanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Operator\DashboardController;
use App\Http\Controllers\Operator\DosenController;
use App\Http\Controllers\Operator\PenelitianController;
use App\Http\Controllers\Operator\PengabdianController;

Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard',  'index');
});

Route::prefix('dosen')->group(function(){
    Route::controller(DosenController::class)->group(function () {
        Route::get('/',  'index');
        Route::get('create', 'create');
        Route::post('/store', 'store');
        Route::get('/edit/{dosen}', 'edit');
        Route::post('/update/{dosen}', 'update');
        Route::post('/delete/{dosen}', 'delete');
    });
});

Route::prefix('penelitian')->group(function(){
    Route::controller(PenelitianController::class)->group(function () {
        Route::get('/',  'index');
        Route::get('create', 'create');
        Route::post('/store', 'store');
        Route::get('/edit/{penelitian}', 'edit');
        Route::post('/update/{penelitian}', 'update');
        Route::post('/delete/{penelitian}', 'delete');
    });
});

Route::prefix('pengabdian')->group(function(){
    Route::controller(PengabdianController::class)->group(function () {
        Route::get('/',  'index');
        Route::get('create', 'create');
        Route::post('/store', 'store');
        Route::get('/edit/{pengabdian}', 'edit');
        Route::post('/update/{pengabdian}', 'update');
        Route::post('/delete/{pengabdian}', 'delete');
    });
});

Route::prefix('catatan')->group(function(){
    Route::controller(CatatanController::class)->group(function () {
        Route::get('/',  'index');
        Route::get('create', 'create');
        Route::post('/store', 'store');
        Route::get('/edit/{catatan}', 'edit');
        Route::post('/update/{catatan}', 'update');
        Route::post('/delete/{catatan}', 'delete');
    });
});
