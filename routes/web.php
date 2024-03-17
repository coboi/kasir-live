<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;
// dashboard
Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

// produk
Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::post('/produk/create', [ProdukController::class, 'create'])->name('produk.create');
Route::get('/produk/edit/{id}', [ProdukController::class, 'edit'])->name('produk.edit');
Route::post('/produk/update', [ProdukController::class, 'update'])->name('produk.update');
Route::delete('/produk/delete/{id}', [ProdukController::class, 'delete'])->name('produk.delete');

// penjualan
Route::get('/penjualan', [PenjualanController::class, 'index'])->name('penjualan.index');
Route::delete('/penjualan/delete/{id}', [PenjualanController::class, 'delete'])->name('penjualan.delete');
Route::post('/penjualan/store', [PenjualanController::class, 'store'])->name('penjualan.store');
Route::get('/penjualan/new/{nota}', [PenjualanController::class, 'new'])->name('penjualan.new');
