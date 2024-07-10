<?php

use App\Http\Controllers\Dosen\CatatanController;
use App\Http\Controllers\Dosen\DashboardController;
use App\Http\Controllers\Dosen\PenelitianController;
use App\Http\Controllers\Dosen\PengabdianController;
use Illuminate\Support\Facades\Route;



Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard',  'index');
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
