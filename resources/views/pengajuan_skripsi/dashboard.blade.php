@extends('layouts.app_skripsi')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid py-3">
  <h3 class="fw-bold mb-2">Dashboard</h3>
  <p class="text-muted mb-4">Selamat datang di Sistem Pengajuan Judul Skripsi.</p>

  {{-- Statistik --}}
  <div class="row g-3 mb-4">
    <div class="col-md-4">
      <div class="card border-0 shadow-sm text-center bg-light">
        <div class="card-body">
          <i class="bi bi-journal-text fs-1 text-primary mb-2"></i>
          <h6 class="fw-semibold text-secondary">Total Pengajuan</h6>
          <h3 class="fw-bold text-dark">{{ $total ?? 0 }}</h3>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card border-0 shadow-sm text-center bg-light">
        <div class="card-body">
          <i class="bi bi-check-circle fs-1 text-success mb-2"></i>
          <h6 class="fw-semibold text-secondary">Disetujui</h6>
          <h3 class="fw-bold text-dark">{{ $disetujui ?? 0 }}</h3>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card border-0 shadow-sm text-center bg-light">
        <div class="card-body">
          <i class="bi bi-x-circle fs-1 text-danger mb-2"></i>
          <h6 class="fw-semibold text-secondary">Ditolak</h6>
          <h3 class="fw-bold text-dark">{{ $ditolak ?? 0 }}</h3>
        </div>
      </div>
    </div>
  </div>

  {{-- Grafik Status --}}
<div class="card border-0 shadow-sm mb-4">
  <div class="card-header bg-dark text-white">
    <strong>Grafik Status Pengajuan</strong>
  </div>
  <div class="card-body d-flex justify-content-center">
    <div style="max-width: 400px; width: 100%;">
      <canvas id="chartStatus"></canvas>
    </div>
  </div>
</div>

  {{-- Daftar pengajuan terbaru --}}
  <div class="card border-0 shadow-sm">
    <div class="card-header bg-dark text-white">
      <strong>Daftar Pengajuan Terbaru</strong>
    </div>
    <div class="card-body p-0">
      <table class="table table-hover mb-0 align-middle">
        <thead class="table-secondary">
          <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>Judul Skripsi</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($pengajuanTerbaru ?? [] as $index => $item)
            <tr>
              <td>{{ $index + 1 }}</td>
              <td>{{ $item->mahasiswa->nama ?? 'Tidak Diketahui' }}</td>
              <td>{{ $item->judul }}</td>
              <td>
                <span class="badge bg-{{ $item->status == 'Disetujui' ? 'success' : ($item->status == 'Ditolak' ? 'danger' : 'warning') }}">
                  {{ $item->status }}
                </span>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="4" class="text-center text-muted py-3">Belum ada data pengajuan</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</div>

{{-- Tambahkan Bootstrap Icons & Chart.js --}}
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const ctx = document.getElementById('chartStatus');
  new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ['Disetujui', 'Ditolak', 'Menunggu'],
      datasets: [{
        data: [{{ $disetujui ?? 0 }}, {{ $ditolak ?? 0 }}, {{ $total - ($disetujui + $ditolak) }}],
        backgroundColor: ['#198754', '#dc3545', '#ffc107'],
        borderWidth: 1,
      }]
    },
    options: {
      plugins: {
        legend: { position: 'bottom' }
      }
    }
  });
</script>
@endpush
@endsection