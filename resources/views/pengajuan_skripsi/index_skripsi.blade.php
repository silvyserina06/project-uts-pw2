@extends('layouts.app_skripsi')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">📄 Daftar Pengajuan Judul Skripsi</h4>
            <a href="{{ route('pengajuan.create') }}" class="btn btn-light btn-sm">
                + Tambah Pengajuan
            </a>
        </div>

        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th style="width: 5%">#</th>
                            <th style="width: 20%">Nama Mahasiswa</th>
                            <th>Judul</th>
                            <th style="width: 15%">Status</th>
                            <th style="width: 20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengajuan as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->mahasiswa->nama }}</td>
                                <td>{{ $item->judul }}</td>
                                <td>
                                    <span class="badge 
                                        @if($item->status == 'Disetujui') bg-success 
                                        @elseif($item->status == 'Ditolak') bg-danger 
                                        @else bg-secondary 
                                        @endif">
                                        {{ $item->status }}
                                    </span>
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('pengajuan_skripsi.show', $item->id) }}" 
                                           class="btn btn-sm btn-info text-white">Detail</a>
                                        <a href="{{ route('pengajuan_skripsi.edit', $item->id) }}" 
                                           class="btn btn-sm btn-warning text-white">Edit</a>
                                        <form action="{{ route('pengajuan_skripsi.destroy', $item->id) }}" 
                                              method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            @if($pengajuan->isEmpty())
                <div class="text-center text-muted mt-3">
                    <em>Belum ada pengajuan skripsi.</em>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection