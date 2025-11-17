@extends('layouts.app_skripsi')

@section('title', 'Edit Mahasiswa')

@section('content')
<div class="container-fluid">
    <h3 class="fw-bold mb-4">Edit Data Mahasiswa</h3>

    <div class="card border-0 shadow-sm p-4">
        <form action="{{ route('mahasiswa.update', $mhs->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control" value="{{ $mhs->nim }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $mhs->nama }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Prodi</label>
                <input type="text" name="prodi" class="form-control" value="{{ $mhs->prodi }}" required>
            </div>

            <button class="btn btn-primary">Simpan</button>
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection