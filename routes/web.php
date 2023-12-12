<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PeramalanController;
use App\Http\Controllers\LaporanStokController;
use App\Http\Controllers\LaporanPenjualanController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/get-monthly-sales-data', [HomeController::class, 'getMonthlySalesData']);
    Route::get('/get-monthly-stock-data', [HomeController::class, 'getMonthlyStockData']);

    Route::resource('/stok', StokController::class)->only(['index']);

    Route::resource('/penjualan', PenjualanController::class)->only(['index']);

    Route::get('/peramalan/create', [PeramalanController::class, 'create'])->name('peramalan.create');

    Route::get('/prediksi-stok/{id}', [PeramalanController::class, 'peramalanStok'])->name('prediksi-stok.index');
    Route::post('/prediksi-stok/{id}', [PeramalanController::class, 'peramalanStok'])->name('prediksi-stok.store');

    Route::get('/laporanPenjualan/{id}', [LaporanPenjualanController::class, 'index'])->name('laporanPenjualan.index');
    Route::post('/laporanPenjualan/{id}', [LaporanPenjualanController::class, 'index'])->name('laporanPenjualan.filter');

    Route::get('/peramalan', [PeramalanController::class, 'index'])->name('peramalan.index');
    Route::get('/peramalan/{peramalan}', [PeramalanController::class, 'show'])->name('peramalan.show');

    Route::get('/laporanStok/{id}', [LaporanStokController::class, 'index'])->name('laporanStok.index');
    Route::post('/laporanStok/{id}', [LaporanStokController::class, 'index'])->name('laporanStok.filter');

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::put('/profile/{id}/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('/profile/{id}/updatePassword', [ProfileController::class, 'updatePassword'])->name('profile.updatePassword');

    Route::middleware(['is_pemilik'])->group(function () {
        Route::resource('/user', UserController::class);

        Route::get('/print/laporan-penjualan', [LaporanPenjualanController::class, 'print'])->name('printPenjualan');

        Route::get('/print/laporan-stok', [LaporanStokController::class, 'print'])->name('printStok');
    });

    Route::middleware(['is_pegawai'])->group(function () {
        Route::resource('/stok', StokController::class)->except(['index']);

        Route::resource('/penjualan', PenjualanController::class)->except(['index']);

        Route::post('/peramalan/store', [PeramalanController::class, 'store'])->name('peramalan.store');

    });
});















