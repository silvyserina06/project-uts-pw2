<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .navbar-brand {
            font-weight: bold;
            letter-spacing: 1px;
        }
        footer {
            margin-top: 40px;
            padding: 15px 0;
            text-align: center;
            color: #777;
            font-size: 14px;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ route('mahasiswa.dashboard') }}">
                PORTAL PENGAJUAN JUDUL SKRIPSI
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('mahasiswa.dashboard') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('mahasiswa.ajukan.form') }}">Ajukan Judul</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('mahasiswa.riwayat') }}">Riwayat</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-danger" href="{{ route('logout') }}">Logout</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- HALAMAN ISI -->
    <div class="container py-4">
        @yield('content')
    </div>

    <footer>
        Portal Pengajuan Judul Skripsi Mahasiswa © 2025
    </footer>

</body>
</html>