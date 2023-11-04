<?php

use App\Http\Controllers\Admin\DarahController as AdminDarahController;
use App\Http\Controllers\Admin\FormulirController as AdminFormulirController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\JadwalController;
use App\Http\Controllers\Admin\PermintaanController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Auth::routes();

Route::view('/', 'user/index')->name('dashboard');

Route::get('/home', [AdminHomeController::class, 'index'])->name('home');

Route::get('/donordarah', [DonorController::class, 'create'])->name('create.donor');
Route::post('/tambahdonordarah', [DonorController::class, 'store'])->name('store.donor');

Route::get('/permintaan/unit', [DonorController::class, 'unit'])->name('unit.permintaan');
Route::post('/permintaan/store', [DonorController::class, 'permintaan'])->name('store.permintaan');

Route::get('/jadwalkegiatan', [DonorController::class, 'jadwal'])->name('jadwal.user');


Route::prefix('/darah')->middleware('auth')->group(function () {
    Route::get('/', [AdminDarahController::class, 'index'])->name('index.darah');
    Route::get('/tambahdarah', [AdminDarahController::class, 'create'])->name('tambah.darah');
    Route::post('/storedarah', [AdminDarahController::class, 'store'])->name('store.darah');
    Route::get('/edit/{id}', [AdminDarahController::class, 'edit'])->name('edit.darah');
    Route::put('/update/{id}', [AdminDarahController::class, 'update'])->name('update.darah');
    Route::delete('/darah/delete/{id}', [AdminDarahController::class, 'delete'])->name('delete.darah');
});

Route::prefix('/formulir')->middleware('auth')->group(function () {
    Route::get('/', [AdminFormulirController::class, 'index'])->name('index.formulir');
    Route::get('/confirm/formulir', [AdminFormulirController::class, 'confirm'])->name('confirm.formulir');
    Route::put('/confirm/{id}', [AdminFormulirController::class, 'confir'])->name('confir.form');
    Route::delete('/delete/formulir/{id}', [AdminFormulirController::class, 'delete'])->name('formulir.delete');

});

Route::prefix('/permintaan')->middleware('auth')->group(function () {
    Route::get('/', [PermintaanController::class, 'index'])->name('index.permintaan');
    Route::get('/confirm/permintaan', [PermintaanController::class, 'confirm'])->name('confirm.permintaan');
    Route::put('/confirm/{id}', [PermintaanController::class, 'confir'])->name('confir.permintaan');
    Route::delete('/delete/permintaan/{id}', [PermintaanController::class, 'delete'])->name('permintaan.delete');

});

Route::prefix('/jadwal')->middleware('auth')->group(function () {
    Route::get('/', [JadwalController::class, 'index'])->name('jadwal');
    Route::get('/createjadwal', [JadwalController::class, 'create'])->name('create.jadwal');
    Route::post('/storejadwal', [JadwalController::class, 'store'])->name('store.jadwal');
    Route::delete('/delete/jadwal/{id}', [JadwalController::class, 'delete'])->name('delete.jadwal');
});
