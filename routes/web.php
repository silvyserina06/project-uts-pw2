<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\Mahasiswa2Controller;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PdamController;

use App\Http\Controllers\PengajuanSkripsiController;
use App\Http\Controllers\AdminSkripsiController;
use App\Http\Controllers\MahasiswaSkripsiController;
use App\Http\Controllers\LaporanSkripsiController;
use App\Http\Controllers\MahasiswaPortalSkripsiController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/mhs', function () {
    return view('mhs');
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

Route::get('/admin/dashboard', [AdminSkripsiController::class, 'index'])->name('dashboard');
Route::get('/admin/pengajuan-skripsi', [PengajuanSkripsiController::class, 'index'])->name('pengajuan.index');
Route::get('/admin/pengajuan-skripsi/{id}', [PengajuanSkripsiController::class, 'show'])->name('pengajuan_skripsi.show');
Route::get('/admin/pengajuan-skripsi/{id}/edit', [PengajuanSkripsiController::class, 'edit'])->name('pengajuan_skripsi.edit');
Route::put('/admin/pengajuan-skripsi/{id}', [PengajuanSkripsiController::class, 'update'])->name('pengajuan_skripsi.update');
Route::delete('/pengajuan-skripsi/{id}', [PengajuanSkripsiController::class, 'destroy'])->name('pengajuan_skripsi.destroy');

Route::get('/admin/mahasiswa', [MahasiswaSkripsiController::class, 'index'])->name('mahasiswa.index');
Route::get('/admin/mahasiswa/{id}/edit', [MahasiswaSkripsiController::class, 'edit'])->name('mahasiswa.edit');
Route::put('/admin/mahasiswa/{id}', [MahasiswaSkripsiController::class, 'update'])->name('mahasiswa.update');
Route::delete('/admin/mahasiswa/{id}', [MahasiswaSkripsiController::class, 'destroy'])->name('mahasiswa.destroy');

Route::get('/admin/laporan', [LaporanSkripsiController::class, 'index'])->name('laporan.index');
Route::get('/admin/laporan-cetak', [LaporanSkripsiController::class, 'cetakPDF'])->name('laporan.cetak');

Route::get('/login', function () {
    return 'Halaman login belum dibuat';
})->name('login');

Route::middleware([])->group(function () {

    Route::get('/mahasiswa/dashboard', [MahasiswaPortalSkripsiController::class, 'dashboard'])->name('mahasiswa.dashboard');

    Route::get('/mahasiswa/riwayat', [MahasiswaPortalSkripsiController::class, 'riwayatskripsi'])->name('mahasiswa.riwayat');

    Route::get('/mahasiswa/ajukan', [MahasiswaPortalSkripsiController::class, 'ajukanForm'])->name('mahasiswa.ajukan.form');

    Route::post('/mahasiswa/ajukan', [MahasiswaPortalSkripsiController::class, 'ajukanStore'])->name('mahasiswa.ajukan.store');
});