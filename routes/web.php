<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/laporbanjir', [LaporanController::class, 'form']);
Route::post('/laporbanjir/simpan', [LaporanController::class, 'simpan']);
Route::get('/daftar-laporan', [LaporanController::class, 'daftar']);