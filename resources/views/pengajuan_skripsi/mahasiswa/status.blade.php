@extends('layouts.app_mhsskripsi')

@section('title', 'Status Pengajuan')

@section('content')

<div class="container">

    <h4 class="fw-bold mb-3">Status Pengajuan Skripsi</h4>

    <div class="card shadow-sm p-3">

        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($pengajuan as $i => $item)
                    <tr>
                        <td>{{ $i+1 }}</td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->deskripsi }}</td>
                        <td>
                            <span class="badge 
                                @if($item->status == 'Pending') bg-warning 
                                @elseif($item->status == 'Diterima') bg-success
                                @else bg-danger 
                                @endif">
                                {{ $item->status }}
                            </span>
                        </td>
                        <td>{{ $item->created_at->format('d M Y') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted">Belum ada pengajuan</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</div>

@endsection