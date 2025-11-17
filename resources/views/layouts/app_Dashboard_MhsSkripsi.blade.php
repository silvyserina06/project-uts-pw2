<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Dashboard' }}</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <!-- NAVBAR -->
    <nav class="bg-blue-700 text-white px-6 py-4 shadow-md flex justify-between items-center">
        <h1 class="text-2xl font-semibold">Skripsi Mahasiswa</h1>

        <div>
            <a href="/dashboard" class="mr-4 hover:text-gray-200">Dashboard</a>
            <a href="/logout" class="hover:text-gray-200">Logout</a>
        </div>
    </nav>

    <div class="flex">

        <!-- SIDEBAR -->
        <aside class="w-64 bg-blue-800 text-white min-h-screen p-6">
            <ul class="space-y-4">
                <li><a href="/dashboard" class="block hover:text-gray-200">🏠 Dashboard</a></li>
                <li><a href="/pengajuan" class="block hover:text-gray-200">📝 Pengajuan Judul</a></li>
                <li><a href="/status" class="block hover:text-gray-200">📌 Status Pengajuan</a></li>
            </ul>
        </aside>

        <!-- CONTENT -->
        <main class="flex-1 p-8">
            @yield('content')
        </main>
    </div>

</body>
</html>
