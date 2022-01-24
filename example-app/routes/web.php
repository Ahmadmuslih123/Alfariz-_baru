<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\TentangController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArmadaController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DatapenumpangController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PerjalananController;
use Illuminate\Support\Facades\Route;

Route::post('/', [IndexController::class, 'pesan'])->name('pesan');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    //    prefix adalah link awal
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('tentang', [TentangController::class, 'index'])->name('tentang');
    Route::post('tentang', [TentangController::class, 'update'])->name('update.tentang');
    
    Route::get('datapenumpang', [DatapenumpangController::class, 'index'])->name('datapenumpang');
    Route::get('datapenumpang/{id}', [DatapenumpangController::class, 'hapus'])->name('hapus.datapenumpang');

    Route::get('armada', [ArmadaController::class, 'index'])->name('armada');
    Route::get('armada/hapus/{id}', [ArmadaController::class, 'hapus'])->name('hapus.armada');
    Route::get('armada/tambah/', [ArmadaController::class, 'tambah'])->name('tambah.armada');
    Route::post('armada/tambah/', [ArmadaController::class, 'kirim'])->name('kirim.armada');
    Route::get('armada/edit/{id}', [ArmadaController::class, 'edit'])->name('edit.armada');
    Route::patch('armada/edit/{id}', [ArmadaController::class, 'update'])->name('update.armada');

    Route::get('beranda', [BerandaController::class, 'index'])->name('beranda');
    Route::get('beranda/hapus/{id}', [BerandaController::class, 'hapus'])->name('hapus.beranda');
    Route::get('beranda/tambah/', [BerandaController::class, 'tambah'])->name('tambah.beranda');
    Route::post('beranda/tambah/', [BerandaController::class, 'kirim'])->name('kirim.beranda');

    Route::get('perjalanan', [PerjalananController::class, 'index'])->name('perjalanan');
    Route::get('perjalanan/tambah/', [PerjalananController::class, 'tambah'])->name('tambah.perjalanan');
    Route::post('perjalanan/tambah/', [PerjalananController::class, 'kirim'])->name('kirim.perjalanan');
    Route::get('perjalanan/edit/{id}', [PerjalananController::class, 'edit'])->name('edit.perjalanan');
    Route::patch('perjalanan/edit/{id}', [PerjalananController::class, 'update'])->name('update.perjalanan');
    Route::get('perjalanan/hapus/{id}', [PerjalananController::class, 'hapus'])->name('hapus.perjalanan');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
