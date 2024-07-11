<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\Unit_KerjaController;


use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/bio', function () {
    return "<h2>Nama saya Adis</h2>";
});

Route::get('/project', function () {
    return view('profile',[
        "nama" => "Adis Rain",
        "umur" => 19,
        "email" => "adisrain4@gmail.com",
        "kampus" => "STT NF",
        "jurusan" => "Sistem Informasi"
    ]);
});

Route::get('/admin', [AdminController::class,'index']);


Route::get('/pasien', [PasienController::class,'index']);
Route::post('/pasien/store', [PasienController::class,'store']);
Route::post('/pasien/update/{id}', [PasienController::class,'update']);
Route::get('/pasien/detail/{id}', [PasienController::class,'show']);
Route::get('/pasien/edit/{id}', [PasienController::class,'edit']);
Route::get('/pasien/delete/{id}', [PasienController::class,'destroy']);


Route::get('/periksa', [PeriksaController::class,'index']);
Route::post('/periksa/store', [PeriksaController::class,'store']);
Route::get('/periksa/delete/{id}', [PeriksaController::class,'destroy']);
Route::get('/periksa/detail/{id}', [PeriksaController::class,'show']);
Route::get('/periksa/edit/{id}', [PeriksaController::class,'edit']);
Route::post('/periksa/update/{id}', [PeriksaController::class,'update']);







Route::get('/dokter', [DokterController::class,'index']);
Route::post('/dokter/store', [DokterController::class,'store']);
Route::get('/dokter/delete/{id}', [DokterController::class,'destroy']);
Route::get('/dokter/detail/{id}', [DokterController::class,'show']);
Route::get('/dokter/edit/{id}', [DokterController::class,'edit']);
Route::post('/dokter/update/{id}', [DokterController::class,'update']);







Route::get('/kelurahan', [KelurahanController::class,'index']);
Route::post('/kelurahan/store', [KelurahanController::class,'store']);


Route::get('/unit_kerja', [Unit_kerjaController::class,'index']);
Route::post('/unit_kerja/store', [Unit_kerjaController::class,'store']);







