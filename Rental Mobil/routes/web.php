<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArmadaController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\Jenis_KendaraanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('wellcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('/admin', [AdminController::class,'index']);


Route::get('/armada/index', [ArmadaController::class,'index']);
Route::post('/armada/store', [ArmadaController::class,'store']);
Route::post('/armada/update/{id}', [ArmadaController::class,'update']);
Route::get('/armada/detail/{id}', [ArmadaController::class,'show']);
Route::get('/armada/edit/{id}', [ArmadaController::class,'edit']);
Route::get('/armada/delete/{id}', [ArmadaController::class,'destroy']);


Route::get('/peminjaman/index', [PeminjamanController::class,'index']);
Route::post('/peminjaman/store', [PeminjamanController::class,'store']);
Route::get('/peminjaman/delete/{id}', [PeminjamanController::class,'destroy']);
Route::get('/peminjaman/detail/{id}', [PeminjamanController::class,'show']);
Route::get('/peminjaman/edit/{id}', [PeminjamanController::class,'edit']);
Route::post('/peminjaman/update/{id}', [PeminjamanController::class,'update']);


Route::get('/pembayaran/index', [PembayaranController::class,'index']);
Route::post('/pembayaran/store', [PembayaranController::class,'store']);
Route::get('/pembayaran/delete/{id}', [PembayaranController::class,'destroy']);
Route::get('/pembayaran/detail/{id}', [PembayaranController::class,'show']);
Route::get('/pembayaran/edit/{id}', [PembayaranController::class,'edit']);
Route::post('/pembayaran/update/{id}', [PembayaranController::class,'update']);


Route::get('/jenis_kendaraan/index', [Jenis_KendaraanController::class,'index']);
Route::post('/jenis_kendaraan/store', [Jenis_KendaraanController::class,'store']);
Route::get('/jenis_kendaraan/delete/{id}', [Jenis_KendaraanController::class,'destroy']);
Route::get('/jenis_kendaraan/detail/{id}', [Jenis_KendaraanController::class,'show']);
Route::get('/jenis_kendaraan/edit/{id}', [Jenis_KendaraanController::class,'edit']);
Route::post('/jenis_kendaraan/update/{id}', [Jenis_KendaraanController::class,'update']);




