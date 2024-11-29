<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TransOrderController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

use function Pest\Laravel\delete;

// /(slash): default route
// methode get, post, put, deleted
// get : melihat
// post : mengirim data dari form (insert, update)
// put : mengirim data dari form (update)
// deleted : mengirim data dari form (deleted)
Route::get('/', [LoginController::class, 'index']);
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('actionLogin', [LoginController::class, 'actionLogin'])->name('actionLogin');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

//grouping routing
Route::middleware(['auth'])->group(function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('customer', CustomerController::class);
    Route::resource('trans_order', TransOrderController::class);

    Route::get('get-paket/{id}', [TransOrderController::class, 'getPaket'])->name('get-paket');
});

Route::get('latihan', [LatihanController::class, 'index']);
Route::get('edit/{id}', [LatihanController::class, 'edit']);
Route::get('hapus/{id}', [LatihanController::class, 'delete']);

Route::get('kalkulator', [KalkulatorController::class, 'index']);
Route::get('tambah', [KalkulatorController::class, 'tambah'])->name('tambah');
Route::get('kurang', [KalkulatorController::class, 'kurang'])->name('kurang');
Route::get('kali', [KalkulatorController::class, 'kali'])->name('kali');
Route::get('bagi', [KalkulatorController::class, 'bagi'])->name('bagi');

Route::post('strore-tambah', [KalkulatorController::class, 'storeTambah'])->name('store-tambah');
Route::post('strore-kurang', [KalkulatorController::class, 'storeKurang'])->name('store-kurang');
Route::post('strore-kali', [KalkulatorController::class, 'storeKali'])->name('store-kali');
Route::post('strore-bagi', [KalkulatorController::class, 'storeBagi'])->name('store-bagi');

Route::resource('user', UsersController::class);
Route::get('delete/{id}', [UsersController::class, 'delete'])->name('delete');
