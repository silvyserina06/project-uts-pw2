@extends('layouts.app_mhsskripsi')

@section('title', 'Dashboard Mahasiswa')

@section('content')

{{-- NAVBAR ATAS --}}
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">
            Dashboard Mahasiswa
        </a>

      
    </div>
</nav>

{{-- HERO SECTION --}}
<div class="container mt-4">
    <div class="p-4 rounded shadow-sm text-white" 
         style="background: linear-gradient(45deg, #ff8a00, #ffb547);">

        <h3 class="fw-bold">Selamat Datang, {{ auth()->user()->nama ?? 'Mahasiswa' }}!</h3>
        <p class="mb-0">
            Pantau dan ajukan proses skripsi dengan mudah melalui dashboard ini.
        </p>
    </div>
</div>

{{-- MENU CARD --}}
<div class="container mt-4">
    <div class="row g-3">

        {{-- Ajukan Judul Skripsi --}}
        <div class="col-md-4">
            <div class="card shadow-sm p-3 h-100">
                <h5 class="fw-bold">Ajukan Judul Skripsi</h5>
                <p>Ajukan judul skripsi baru untuk diproses oleh admin.</p>
                <a href="{{ route('mahasiswa.skripsi.tambah') }}" class="btn btn-primary">
                    Ajukan
                </a>
            </div>
        </div>

        {{-- Riwayat Pengajuan --}}
        <div class="col-md-4">
            <div class="card shadow-sm p-3 h-100">
                <h5 class="fw-bold">Riwayat Pengajuan</h5>
                <p>Lihat status pengajuan skripsi kamu: pending, diterima, atau ditolak.</p>
                <a href="{{ route('mahasiswa.skripsi.riwayat') }}" class="btn btn-warning">
                    Lihat Riwayat
                </a>
            </div>
        </div>

        {{-- Profil Mahasiswa --}}
        <div class="col-md-4">
            <div class="card shadow-sm p-3 h-100">
                <h5 class="fw-bold">Profil Mahasiswa</h5>
                <p>Informasi pribadi seperti nama, NIM, prodi, dan data lainnya.</p>
                <a href="#" class="btn btn-secondary">
                    Lihat Profil
                </a>
            </div>
        </div>

    </div>
</div>

@endsection