@extends('layouts.app_mhsskripsi')

@section('title', 'Riwayat Pengajuan')

@section('content')

<h3 class="mb-3">Riwayat Pengajuan</h3>

<form method="GET" action="{{ route('mahasiswa.riwayat') }}" class="mb-3">
    <input type="text" name="nim" placeholder="Masukkan NIM" class="form-control" required>
    <button type="submit" class="btn btn-primary mt-2">Lihat Riwayat</button>
</form>

{{-- Hanya tampilkan hasil jika NIM sudah dimasukkan --}}
@if(request()->has('nim'))

    @if($riwayat->isEmpty())
        <p>Belum ada pengajuan untuk NIM ini.</p>
    @else
        <table class="table table-bordered">
            <thead>
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
                        <td>{{ $p->status }}</td>
                        <td>{{ $p->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

@endif

@endsection