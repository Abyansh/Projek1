<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/input-mahasiswa', [MahasiswaController::class, 'create']);
Route::post('/simpan-mahasiswa', [MahasiswaController::class, 'store']);