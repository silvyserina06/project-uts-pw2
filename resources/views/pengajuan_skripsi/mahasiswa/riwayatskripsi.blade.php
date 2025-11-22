@extends('layouts.app_mhsskripsi')

@section('title', 'Riwayat Pengajuan')

@section('content')

<div class="container mt-4">

    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <h4 class="mb-3 text-primary fw-bold">Riwayat Pengajuan Skripsi</h4>

            <form method="GET" action="{{ route('mahasiswa.riwayat') }}">
                <div class="input-group">
                    <input type="text" name="nim" placeholder="Masukkan NIM"
                        class="form-control" required>
                    <button type="submit" class="btn btn-primary">Lihat Riwayat</button>
                </div>
            </form>
        </div>
    </div>

    {{-- Hanya tampilkan hasil jika NIM sudah dimasukkan --}}
    @if(request()->has('nim'))

        @if($riwayat->isEmpty())
            <div class="alert alert-warning">
                Belum ada pengajuan untuk NIM ini.
            </div>
        @else

            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="fw-semibold mb-3">Hasil Pengajuan</h5>

                    <table class="table table-hover table-bordered align-middle">
                        <thead class="table-primary">
                            <tr>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Status</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($riwayat as $p)
                                <tr>
                                    <td>{{ $p->judul }}</td>
                                    <td>{{ $p->deskripsi }}</td>
                                    <td>
                                        <span class="badge 
                                            @if($p->status == 'diterima') bg-success 
                                            @elseif($p->status == 'ditolak') bg-danger 
                                            @else bg-warning text-dark @endif">
                                            {{ ucfirst($p->status) }}
                                        </span>
                                    </td>
                                    <td>{{ $p->created_at->format('d M Y') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>

        @endif

    @endif

</div>

@endsection