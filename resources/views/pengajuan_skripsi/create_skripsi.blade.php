@extends('layouts.app_skripsi')

@section('content')
<div class="container mt-4">
    <h2>Form Pengajuan Skripsi</h2>

    <form action="{{ route('pengajuan_skripsi.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="mahasiswa_id" class="form-label">Nama Mahasiswa</label>
            <select name="mahasiswa_id" id="mahasiswa_id" class="form-select" required>
                <option value="">-- Pilih Mahasiswa --</option>
                @foreach ($mahasiswa as $Mhs)
                    <option value="{{ $Mhs->id }}">{{ $Mhs->nama }} - {{ $Mhs->nim }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="judul" class="form-label">Judul Skripsi</label>
            <input type="text" name="judul" id="judul" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('pengajuan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection