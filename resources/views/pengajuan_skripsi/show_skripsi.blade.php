@extends('layouts.app_skripsi')

@section('content')
<div class="container mt-4">
    <h2>Detail Pengajuan Skripsi</h2>

    <div class="card">
        <div class="card-body">
            <h5>Nama: {{ $pengajuan->mahasiswa->nama }}</h5>
            <p><strong>Judul:</strong> {{ $pengajuan->judul }}</p>
            <p><strong>Deskripsi:</strong> {{ $pengajuan->deskripsi ?? '-' }}</p>
            <p><strong>Status:</strong> 
                <span class="badge bg-{{ $pengajuan->status == 'Disetujui' ? 'success' : ($pengajuan->status == 'Ditolak' ? 'danger' : 'secondary') }}">
                    {{ $pengajuan->status }}
                </span>
            </p>
        </div>
    </div>

    <a href="{{ route('pengajuan.index') }}" class="btn btn-primary mt-3">Kembali</a>
</div>
@endsection