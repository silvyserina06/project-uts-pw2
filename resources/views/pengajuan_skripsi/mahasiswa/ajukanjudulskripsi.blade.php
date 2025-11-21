@extends('layouts.app_mhsskripsi')

@section('title', 'Ajukan Judul Skripsi')

@section('content')

<div class="container">
    <div class="card shadow p-4">
        <h4 class="fw-bold mb-3">Form Pengajuan Judul Skripsi</h4>

        {{-- Form --}}
        <form action="{{ route('mahasiswa.skripsi.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Judul Skripsi</label>
                <input type="text" name="judul" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Deskripsi Singkat</label>
                <textarea name="deskripsi" rows="4" class="form-control" required></textarea>
            </div>

            <button class="btn btn-primary" type="submit">Kirim Pengajuan</button>

        </form>
    </div>
</div>

@endsection