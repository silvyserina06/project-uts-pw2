@extends('layouts.app_skripsi')

@section('content')
<div class="container mt-4">
    <h2>Edit Pengajuan Skripsi</h2>

    <form action="{{ route('pengajuan_skripsi.update', $pengajuan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="mahasiswa_id" class="form-label">Nama Mahasiswa</label>
            <select name="mahasiswa_id" id="mahasiswa_id" class="form-select" required>
                <option value="">-- Pilih Mahasiswa --</option>
                @foreach ($mahasiswa as $mhs)
                    <option value="{{ $mhs->id }}" {{ $pengajuan->mahasiswa_id == $mhs->id ? 'selected' : '' }}>
                        {{ $mhs->nama }} - {{ $mhs->nim }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="judul" class="form-label">Judul Skripsi</label>
            <input type="text" name="judul" id="judul" class="form-control" 
                   value="{{ old('judul', $pengajuan->judul) }}" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4">{{ old('deskripsi', $pengajuan->deskripsi) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status Pengajuan</label>
            <select name="status" id="status" class="form-select" required>
                <option value="Menunggu" {{ $pengajuan->status == 'Menunggu' ? 'selected' : '' }}>Menunggu</option>
                <option value="Disetujui" {{ $pengajuan->status == 'Disetujui' ? 'selected' : '' }}>Disetujui</option>
                <option value="Ditolak" {{ $pengajuan->status == 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        <a href="{{ route('pengajuan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection