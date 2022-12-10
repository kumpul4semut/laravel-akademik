<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/list', [MahasiswaController::class, 'show']);
Route::get('/', [MahasiswaController::class, 'index']);
Route::post('/', [MahasiswaController::class, 'create']);
Route::delete('/{id}', [MahasiswaController::class, 'destroy']);

Route::get('/siswa/export_excel', [MahasiswaController::class, 'export']);
