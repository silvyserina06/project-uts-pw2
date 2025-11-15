<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\Mahasiswa2Controller;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PdamController;
use App\Http\Controllers\PengajuanSkripsiController;
use App\Http\Controllers\MahasiswaSkripsiDashboardController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/mhs', function () {
    return view('mhs');

});
Route::get('/dashboard', function () {
    return view('pengajuan_skripsi.dashboard');
});

Route::get('/mhs-baru', [MahasiswaController::class, 'index']);
Route::get('/khs', [MahasiswaController::class, 'khsView']);
Route::get('/krs', [MahasiswaController::class, 'krsView']);

Route::resource('mahasiswa2', Mahasiswa2Controller::class);
Route::get('/mahasiswa_index', [Mahasiswa2Controller::class, 'index']);

Route::get('/dosen',[DosenController::class,'index'])->name('dosenIndex');
Route::get('/dosen-create',[DosenController::class,'create'])->name('dosenCreate');
Route::get('/dosen-simpan',[DosenController::class,'store'])->name('dosenSimpan');

Route::get('/pdam', [PdamController::class, 'index']);
Route::post('/pdam/hitung', [PdamController::class, 'hitung'])->name('pdam.hitung');

Route::get('/pengajuan-skripsi', [PengajuanSkripsiController::class, 'index'])->name('pengajuan.index');
Route::get('/pengajuan-skripsi/create', [PengajuanSkripsiController::class, 'create'])->name('pengajuan.create');
Route::post('/pengajuan-skripsi', [PengajuanSkripsiController::class, 'store'])->name('pengajuan_skripsi.store');
Route::get('/pengajuan-skripsi/{id}', [PengajuanSkripsiController::class, 'show'])->name('pengajuan_skripsi.show');

Route::get('/dashboard', [MahasiswaSkripsiDashboardController::class, 'index'])->name('skripsi.dashboard');
Route::get('/pengajuan', [PengajuanSkripsiController::class, 'create'])->name('skripsi.pengajuan.create');
Route::post('/pengajuan', [PengajuanSkripsiController::class, 'store'])->name('skripsi.pengajuan.store');
Route::get('/riwayat', [PengajuanSkripsiController::class, 'index'])->name('skripsi.pengajuan.index');
Route::get('/profil', [MahasiswaSkripsiDashboardController::class, 'profil'])->name('skripsi.profil');