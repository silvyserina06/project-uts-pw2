@extends('layouts.app_skripsi')

@section('title', 'Dashboard')

@section('content')
  <h3 class="fw-bold mb-4">Dashboard</h3>

  <div class="row">
    <div class="col-md-4 mb-3">
      <div class="card text-bg-primary">
        <div class="card-body">
          <h5 class="card-title">Total Pengajuan</h5>
          <p class="card-text fs-4">15</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <div class="card text-bg-success">
        <div class="card-body">
          <h5 class="card-title">Disetujui</h5>
          <p class="card-text fs-4">8</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <div class="card text-bg-danger">
        <div class="card-body">
          <h5 class="card-title">Ditolak</h5>
          <p class="card-text fs-4">7</p>
        </div>
      </div>
    </div>
  </div>

  <div class="card mt-4">
    <div class="card-header bg-dark text-white">Daftar Pengajuan Terbaru</div>
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>Judul Skripsi</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Silvy Serina</td>
            <td>Sistem Informasi Pengajuan Judul Skripsi</td>
            <td><span class="badge bg-warning">Menunggu</span></td>
          </tr>
          <tr>
            <td>2</td>
            <td>Andi Pratama</td>
            <td>Analisis Sistem Informasi Akademik</td>
            <td><span class="badge bg-success">Disetujui</span></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection
