<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title') | Pengajuan Skripsi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f5f6fa;
      font-family: 'Poppins', sans-serif;
    }
    .sidebar {
      width: 230px;
      position: fixed;
      top: 0;
      left: 0;
      height: 100%;
      background-color: #343a40;
      padding-top: 60px;
    }
    .sidebar a {
      display: block;
      color: white;
      padding: 12px 20px;
      text-decoration: none;
    }
    .sidebar a:hover, .sidebar a.active {
      background-color: #495057;
    }
    .content {
      margin-left: 230px;
      padding: 20px;
    }
    .navbar {
      position: fixed;
      top: 0;
      left: 230px;
      right: 0;
      background-color: #212529;
      color: white;
      height: 60px;
      display: flex;
      align-items: center;
      padding: 0 20px;
      z-index: 1000;
    }
  </style>
</head>
<body>

  <div class="sidebar">
    <h5 class="text-center text-white mb-3">Skripsi App</h5>
    <a href="/dashboard" class="{{ request()->is('dashboard') ? 'active' : '' }}"> Dashboard</a>
    <a href="/pengajuan_skripsi" class="{{ request()->is('pengajuan_skripsi') ? 'active' : '' }}"> Pengajuan</a>
    <a href="/mahasiswa" class="{{ request()->is('mahasiswa') ? 'active' : '' }}"> Mahasiswa</a>
  </div>

  <div class="navbar">
    <span class="fw-semibold">Dashboard Sistem Pengajuan Skripsi</span>
  </div>

  <div class="content mt-4">
    @yield('content')
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
