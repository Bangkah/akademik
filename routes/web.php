<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\ProdiController;



Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('jurusan', JurusanController::class);
Route::resource('dosen', DosenController::class);
Route::resource('prodi', ProdiController::class);
Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
