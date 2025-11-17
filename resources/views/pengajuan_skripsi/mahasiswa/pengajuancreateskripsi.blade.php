@extends('layouts.app_mhsskripsi')

@section('content')
<div class="container">
    <h4>Form Pengajuan Skripsi</h4>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('pengajuan.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Judul Skripsi</label>
            <input type="text" name="judul" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">
            Kirim Pengajuan
        </button>
    </form>
</div>
@endsection