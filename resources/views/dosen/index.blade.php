@extends('layouts.master')

@section('title', 'Data Dosen')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

<div class="container mt-4">
    <h2>DATA DOSEN</h2>
    
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
    
    <a href="{{ route('dosenCreate') }}" class="btn btn-primary mb-3">Tambah Dosen</a>
    
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Nip</th>
                <th>Prodi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($dosens as $key => $dosen)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $dosen->nama_lengkap }}</td>
                <td>{{ $dosen->nip }}</td>
                <td>{{ $dosen->prodi }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">Belum ada data dosen</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz4YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
@endsection