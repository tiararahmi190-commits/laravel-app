<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/keluarga', [App\Http\Controllers\KeluargaController::class, 'index'])->name('keluarga.index');
Route::get('/keluarga/create', [App\Http\Controllers\KeluargaController::class, 'create'])->name('keluarga.create');
Route::post('/keluarga', [App\Http\Controllers\KeluargaController::class, 'store'])->name('keluarga.store');
Route::get('/keluarga/{id}/edit', [App\Http\Controllers\KeluargaController::class, 'edit'])->name('keluarga.edit');
Route::put('/keluarga/{id}', [App\Http\Controllers\KeluargaController::class, 'update'])->name('keluarga.update');
Route::delete('/keluarga/{id}', [App\Http\Controllers\KeluargaController::class, 'destory'])->name('keluarga.destroy');