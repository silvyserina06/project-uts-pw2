@extends('layouts.app_mhsskripsi')

@section('title', 'Riwayat Pengajuan')

@section('content')
<div class="container mt-4">

    {{-- Judul Halaman --}}
    <h3 class="mb-4">Riwayat Pengajuan Skripsi</h3>

    {{-- Jika tidak ada data --}}
    @if($riwayat->isEmpty())
        <div class="alert alert-info">
            Kamu belum pernah mengajukan judul skripsi.
        </div>
    @else

    {{-- Tabel Riwayat --}}
    <div class="card">
        <div class="card-body p-0">
            <table class="table table-striped mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Judul Skripsi</th>
                        <th>Deskripsi</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($riwayat as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->deskripsi }}</td>
                        <td>
                            @if($item->status == 'diproses')
                                <span class="badge bg-warning text-dark">Diproses</span>
                            @elseif($item->status == 'disetujui')
                                <span class="badge bg-success">Disetujui</span>
                            @else
                                <span class="badge bg-danger">Ditolak</span>
                            @endif
                        </td>
                        <td>{{ $item->created_at->format('d M Y') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @endif

</div>
@endsection