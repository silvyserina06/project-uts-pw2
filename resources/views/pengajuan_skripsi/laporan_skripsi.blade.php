@extends('layouts.app_skripsi')

@section('title', 'Laporan Pengajuan')

@section('content')
<div class="container-fluid">

    <div class="card mb-4 p-3">
        <h5 class="mb-3">Filter Laporan</h5>

        <form method="GET" class="row g-3">
            <div class="col-md-4">
                <label>Dari Tanggal</label>
                <input type="date" name="start" value="{{ $start }}" class="form-control">
            </div>

            <div class="col-md-4">
                <label>Sampai Tanggal</label>
                <input type="date" name="end" value="{{ $end }}" class="form-control">
            </div>

            <div class="col-md-4 d-flex align-items-end">
                <button class="btn btn-primary me-2">
                    <i class="bi bi-search"></i> Filter
                </button>

                <a href="{{ route('laporan.index') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-repeat"></i> Reset
                </a>
            </div>
        </form>
    </div>

    <div class="card p-3">

       <div class="print-header" style="display:none;">
            <h4 style="margin:0;">LAPORAN DATA PENGAJUAN SKRIPSI</h4>

            @if($start && $end)
                <p><strong>Periode:</strong> {{ $start }} s/d {{ $end }}</p>
            @else
                <p><strong>Periode:</strong> Semua Data</p>
            @endif
            </div>

         <div class="d-flex justify-content-start mb-2">
            <a href="{{ route('laporan.cetak', ['start' => $start, 'end' => $end]) }}"
                class="btn btn-success btn-sm">
                <i class="bi bi-file-earmark-pdf-fill"></i> Cetak PDF
            </a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Mahasiswa</th>
                        <th>Judul</th>
                        <th>Status</th>
                        <th>Tanggal Pengajuan</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->mahasiswa->nama ?? '-' }}</td>
                        <td>{{ $item->judul }}</td>
                        <td>
                            <span class="badge 
                                @if($item->status=='Menunggu') bg-warning text-dark
                                @elseif($item->status=='Disetujui') bg-success
                                @else bg-danger @endif">
                                {{ $item->status }}
                            </span>
                        </td>
                        <td>{{ $item->created_at->format('d-m-Y') }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted">Tidak ada data</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection