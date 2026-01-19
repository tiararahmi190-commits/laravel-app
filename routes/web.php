<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);

Route::get('/keluarga', [App\Http\Controllers\KeluargaController::class, 'index']);
Route::get('/keluarga/create', [App\Http\Controllers\KeluargaController::class, 'create']);
Route::post('/keluarga', [App\Http\Controllers\KeluargaController::class, 'store']);
Route::get('/keluarga/{id}/edit', [App\Http\Controllers\KeluargaController::class, 'edit']);
Route::put('/keluarga/{id}', [App\Http\Controllers\KeluargaController::class, 'update']);
Route::delete('/keluarga/{id}', [App\Http\Controllers\KeluargaController::class, 'destroy']);

Route::get('/balita', [App\Http\Controllers\BalitaController::class, 'index']);
Route::get('/balita/create', [App\Http\Controllers\BalitaController::class, 'create']);
Route::post('/balita', [App\Http\Controllers\BalitaController::class, 'store']);
Route::get('/balita/{id}/edit', [App\Http\Controllers\BalitaController::class, 'edit']);
Route::put('/balita/{id}', [App\Http\Controllers\BalitaController::class, 'update']);
Route::delete('/balita/{id}', [App\Http\Controllers\BalitaController::class, 'destroy']);

Route::get('/penimbangan', [App\Http\Controllers\PenimbanganController::class, 'index']);
Route::get('/penimbangan/create', [App\Http\Controllers\PenimbanganController::class, 'create']);
Route::post('/penimbangan', [App\Http\Controllers\PenimbanganController::class, 'store']);
Route::get('/penimbangan/{id}/edit', [App\Http\Controllers\PenimbanganController::class, 'edit']);
Route::put('/penimbangan/{id}', [App\Http\Controllers\PenimbanganController::class, 'update']);
Route::delete('/penimbangan/{id}', [App\Http\Controllers\PenimbanganController::class, 'destroy']);