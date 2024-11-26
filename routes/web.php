<?php

use App\Http\Controllers\DashboarController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;


// default route?
// method get, post, put, delete
// get: melihat
//mengirim data dari form untuk insert dan update
//put mengirim data dari form khusus untuk update
//delete mengirim data dari form khusus untuk delete
Route::get('/', [LoginController::class, 'index']);
Route::post('actionLogin', [LoginController::class, 'actionLogin'])->name('actionLogin'); //


Route::middleware(['auth'])->group(function(){
    Route::resource('dashboard',DashboarController::class);
});
Route::get('latihan', [LatihanController::class, 'index']);
Route::get('edit/{id}', [LatihanController::class, 'edit']);
Route::get('hapus/{id}', [LatihanController::class, 'delete']);


Route::get('kalkulator', [KalkulatorController::class, 'index']);
Route::get('tambah', [KalkulatorController::class, 'tambah'])->name('tambah');
Route::get('kurang', [KalkulatorController::class, 'kurang'])->name('kurang');
Route::get('kali', [KalkulatorController::class, 'kali'])->name('kali');
Route::get('bagi', [KalkulatorController::class, 'bagi'])->name('bagi');

Route::POST('store-tambah', [KalkulatorController::class, 'storeTambah'])->name('store-tambah');
Route::POST('store-kurang', [KalkulatorController::class, 'storeKurang'])->name('store-kurang');
Route::POST('store-kali', [KalkulatorController::class, 'storeKali'])->name('store-kali');
Route::POST('store-bagi', [KalkulatorController::class, 'storeBagi'])->name('store-bagi');

Route::resource('user', UsersController::class);
