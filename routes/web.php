<?php

use Illuminate\Support\Facades\Route;


// Authentication Routes
Route::prefix('/')->group(function () {
    include('_route/Auth.php');
});

// Operator Routes
Route::prefix('operator')->middleware('auth:role')->group(function () {
    include('_route/Operator.php');
})->middleware('auth:role');

// Dosen Routes
Route::prefix('dosen')->middleware('auth:role')->group(function () {
    include('_route/Dosen.php');
})->middleware('auth:role');
