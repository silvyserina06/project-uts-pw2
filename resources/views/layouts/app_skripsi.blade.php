<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Dashboard')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background-color: #f5f6fa;
      font-family: 'Poppins', sans-serif;
    }

    /* Sidebar */
    .sidebar {
      width: 250px;
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      background-color: #212529;
      color: white;
      transition: all 0.3s;
      z-index: 100;
    }

    .sidebar.collapsed {
      width: 80px;
    }

    .sidebar h4 {
      padding: 20px;
      font-weight: 600;
      text-align: center;
      font-size: 18px;
      border-bottom: 1px solid rgba(255,255,255,0.1);
      transition: opacity 0.3s;
    }

    .sidebar.collapsed h4 span {
      display: none;
    }

    .sidebar a {
      display: flex;
      align-items: center;
      padding: 12px 20px;
      color: #adb5bd;
      text-decoration: none;
      font-weight: 500;
      transition: all 0.2s;
    }

    .sidebar a:hover, .sidebar a.active {
      background-color: #0d6efd;
      color: white;
    }

    .sidebar i {
      font-size: 20px;
      margin-right: 12px;
      transition: margin 0.3s, font-size 0.3s;
    }

    .sidebar.collapsed i {
      margin-right: 0;
    }

    .sidebar.collapsed a span {
      display: none;
    }

    /* Header */
    .main-header {
      height: 60px;
      background-color: white;
      box-shadow: 0 2px 4px rgba(0,0,0,0.05);
      padding: 10px 25px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: fixed;
      top: 0;
      left: 250px;
      width: calc(100% - 250px);
      transition: all 0.3s;
      z-index: 90;
    }

    .main-header.collapsed {
      left: 80px;
      width: calc(100% - 80px);
    }

    .main-header h5 {
      margin: 0;
      font-weight: 600;
      color: #333;
    }

    /* Content */
    .main-content {
      margin-left: 250px;
      margin-top: 80px;
      padding: 30px;
      transition: all 0.3s;
    }

    .main-content.collapsed {
      margin-left: 80px;
    }

    .card {
      border: none;
      border-radius: 12px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.08);
    }

    /* Toggle button */
    #toggleSidebar {
      background: none;
      border: none;
      color: #333;
      font-size: 22px;
      cursor: pointer;
    }

    @media print {
        /* Hilangkan elemen yang tidak perlu saat print */
        .sidebar,
        .main-header,
        .btn,
        form,
        #toggleSidebar {
            display: none !important;
        }

        body {
            background: white !important;
        }

        .main-content {
            margin: 0 !important;
            padding: 0 !important;
        }

        table {
            font-size: 12px;
        }

        /* Biar judul laporan muncul di print */
        .print-header {
            display: block !important;
            text-align: center;
            margin-bottom: 20px;
        }
    }
  </style>
</head>
<body>

  {{-- Sidebar --}}
  <div class="sidebar" id="sidebar">
    <h4><i class="bi bi-mortarboard-fill"></i> <span>Skripsi Admin</span></h4>
    <a href="{{ route('dashboard') }}" class="{{ request()->is('dashboard') ? 'active' : '' }}">
      <i class="bi bi-speedometer2"></i> <span>Dashboard</span>
    </a>

    <a href="{{ route('pengajuan.index') }}" class="{{ request()->is('pengajuan*') ? 'active' : '' }}">
      <i class="bi bi-journal-text"></i> <span>Pengajuan Judul</span>
    </a>

    <a href="{{ route('mahasiswa.index') }}" class="{{ request()->is('admin/mahasiswa*') ? 'active' : '' }}">
    <i class="bi bi-person-lines-fill"></i> <span>Data Mahasiswa</span>
    </a>

    <a href="{{ route('laporan.index') }}" class="{{ request()->is('laporan') ? 'active' : '' }}">
    <i class="bi bi-file-earmark-text"></i> <span>Laporan</span>
    </a>

    <a href="#"><i class="bi bi-gear"></i> <span>Pengaturan</span></a>
  </div>

  {{-- Header --}}
  <div class="main-header" id="mainHeader">
    <button id="toggleSidebar"><i class="bi bi-list"></i></button>
    <h5>@yield('title', 'Dashboard')</h5>
    <div>
      <i class="bi bi-bell fs-5 me-3"></i>
      <i class="bi bi-person-circle fs-5"></i>
    </div>
  </div>

  {{-- Content --}}
  <div class="main-content" id="mainContent">
    @yield('content')
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const sidebar = document.getElementById('sidebar');
    const mainHeader = document.getElementById('mainHeader');
    const mainContent = document.getElementById('mainContent');
    const toggleBtn = document.getElementById('toggleSidebar');

    toggleBtn.addEventListener('click', () => {
      sidebar.classList.toggle('collapsed');
      mainHeader.classList.toggle('collapsed');
      mainContent.classList.toggle('collapsed');
    });
  </script>
  @stack('scripts')
</body>
</html>