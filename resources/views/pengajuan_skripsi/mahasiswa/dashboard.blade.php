@extends('mahasiswa.layouts.app_mhsskripsi')

@section('title', 'Dashboard Mahasiswa')

@section('content')

<h3 class="mb-4">Selamat Datang di Portal Skripsi</h3>

<div class="row">

    <div class="col-md-6 mb-3">
        <div class="card p-3 shadow-sm">
            <h5>Ajukan Judul Skripsi</h5>
            <p>Silakan ajukan judul skripsi sesuai ketentuan program studi.</p>
            <a href="{{ route('mahasiswa.ajukan') }}" class="btn btn-primary btn-sm">Ajukan Sekarang</a>
        </div>
    </div>

    <div class="col-md-6 mb-3">
        <div class="card p-3 shadow-sm">
            <h5>Riwayat Pengajuan</h5>
            <p>Lihat status pengajuan judul skripsi anda sebelumnya.</p>
            <a href="{{ route('mahasiswa.riwayat') }}" class="btn btn-secondary btn-sm">Lihat Riwayat</a>
        </div>
    </div>

</div>

<div class="card p-4 mt-4 shadow-sm">
    <h5>Informasi Terbaru</h5>
    <p class="text-muted">Belum ada informasi terbaru.</p>
</div>

@endsection