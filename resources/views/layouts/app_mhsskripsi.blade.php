<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .navbar-brand {
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        body {
            background-color: #f9fafb;
        }

        .content-wrapper {
            min-height: 70vh;
        }
    </style>
</head>

<body>

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">

            <a class="navbar-brand" href="{{ route('mahasiswa.dashboard') }}">
                PORTAL SKRIPSI
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="nav">
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
                        <form action="{{ route('logout.mhsskripsi') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="nav-link text-danger border-0 bg-transparent">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- ISI HALAMAN --}}
    <div class="container py-4 content-wrapper">
        @yield('content')
    </div>

    {{-- FOOTER TERPISAH --}}
    @include('layouts.footer_mhsskripsi')

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>