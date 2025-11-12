@extends('layouts.app_skripsi')

@section('content')
<div class="container mt-4">
    <h2 class="mb-3">Daftar Pengajuan Skripsi</h2>

    <a href="{{ route('pengajuan.create') }}" class="btn btn-primary mb-3">+ Tambah Pengajuan</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Mahasiswa</th>
                <th>Judul</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengajuan as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->mahasiswa->nama }}</td>
                    <td>{{ $item->judul }}</td>
                    <td>
                        <span class="badge bg-{{ $item->status == 'Disetujui' ? 'success' : ($item->status == 'Ditolak' ? 'danger' : 'secondary') }}">
                            {{ $item->status }}
                        </span>
                    </td>
                    <td>
                        <a href="{{ route('pengajuan_skripsi.show', $item->id) }}" class="btn btn-sm btn-info">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection