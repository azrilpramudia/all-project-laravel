<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\LaporanController;

Route::get('/', function () {
    return redirect('/produk');
});

Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/penjualan', [PenjualanController::class, 'index']);
Route::get('/laporan', [LaporanController::class, 'index']);
Route::resource('produk', ProdukController::class);
Route::resource('penjualan', PenjualanController::class);
Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');

