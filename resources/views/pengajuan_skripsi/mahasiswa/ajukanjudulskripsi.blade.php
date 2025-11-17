@extends('mahasiswa.layouts.app_mhsskripsi')

@section('title', 'Ajukan Judul')

@section('content')

<h3 class="mb-3">Ajukan Judul Skripsi</h3>

<div class="card p-3">

    <form action="{{ route('mahasiswa.ajukan.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Judul Skripsi</label>
            <input type="text" name="judul" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="4" required></textarea>
        </div>

        <button class="btn btn-primary">Kirim Pengajuan</button>
    </form>

</div>

@endsection