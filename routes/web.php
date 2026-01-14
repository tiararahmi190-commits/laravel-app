<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/keluarga', [App\Http\Controllers\KeluargaController::class, 'index']);
Route::get('/keluarga/create', [App\Http\Controllers\KeluargaController::class, 'create']);
Route::post('/keluarga', [App\Http\Controllers\KeluargaController::class, 'store']);
Route::get('/keluarga/{id}/edit', [App\Http\Controllers\KeluargaController::class, 'edit']);
Route::put('/keluarga/{id}', [App\Http\Controllers\KeluargaController::class, 'update']);
Route::delete('/keluarga/{id}', [App\Http\Controllers\KeluargaController::class, 'destroy']);