<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Sistem Skripsi Mahasiswa</title>

    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Style tambahan --}}
    <style>
        body {
            background: #f5f5f5;
        }

        .navbar {
            height: 60px;
        }

        .card {
            border-radius: 12px;
        }
    </style>
</head>

<body>

    {{-- NAVBAR GLOBAL (dipakai semua halaman) --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
        <div class="container">

            <a class="navbar-brand fw-bold" href="{{ route('mahasiswa.dashboard') }}">
                Mahasiswa Skripsi
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                {{-- MENU KANAN --}}
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('mahasiswa.dashboard') }}">Dashboard</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('mahasiswa.skripsi.tambah') }}">
                            Ajukan Judul
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('mahasiswa.skripsi.riwayat') }}">
                            Riwayat
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                            Login
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">
                            Log out
                        </a>
                    </li>

                    {{-- Nama Mahasiswa --}}
                    <li class="nav-item ms-3 mt-1">
                        <span class="fw-bold">
                            {{ auth()->user()->nama ?? 'Mahasiswa' }}
                        </span>
                    </li>

                  

                </ul>
            </div>
        </div>
    </nav>

    {{-- KONTEN HALAMAN --}}
    <div style="margin-top: 90px;">
        @yield('content')
    </div>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>