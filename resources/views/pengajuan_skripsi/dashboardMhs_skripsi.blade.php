@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-100">

    <!-- HEADER -->
    <header class="bg-white shadow p-4 flex justify-between items-center px-8">
        <div class="text-xl font-bold text-blue-700">
            Dashboard Mahasiswa
        </div>

        <div class="flex gap-6 text-gray-700">
            <a href="#" class="hover:text-blue-700">Beranda</a>
            <a href="#" class="hover:text-blue-700">Pengajuan</a>
            <a href="#" class="hover:text-blue-700">Profil</a>
        </div>
    </header>

    <div class="flex">

        <!-- SIDEBAR -->
        <aside class="w-64 bg-white border-r min-h-screen p-5">
            <h2 class="text-lg font-semibold mb-3">Menu</h2>
            <ul class="space-y-3 text-gray-700">
                <li><a href="#" class="block hover:text-blue-700">Dashboard</a></li>
                <li><a href="#" class="block hover:text-blue-700">Pengajuan Judul</a></li>
                <li><a href="#" class="block hover:text-blue-700">Bimbingan</a></li>
                <li><a href="#" class="block hover:text-blue-700">Progress Skripsi</a></li>
                <li><a href="#" class="block hover:text-blue-700">Nilai</a></li>
            </ul>
        </aside>

        <!-- MAIN CONTENT -->
        <main class="flex-1 p-8">

            <!-- SEARCH BAR -->
            <div class="flex justify-between mb-6">
                <h1 class="text-2xl font-bold text-blue-700">Selamat Datang</h1>

                <div class="flex items-center">
                    <input
                        type="text"
                        placeholder="Cari Menu..."
                        class="border p-2 rounded-l-md w-64"
                    >
                    <button class="bg-blue-700 text-white px-4 py-2 rounded-r-md">
                        Cari
                    </button>
                </div>
            </div>

            <!-- BANNER -->
            <div class="bg-gradient-to-r from-blue-700 to-blue-400 p-6 rounded-2xl shadow text-white flex items-center gap-6">
                <div>
                    <h2 class="text-3xl font-extrabold mb-2">Pengajuan Skripsi</h2>
                    <p>Ajukan judul & lihat status pengajuan skripsimu dengan mudah.</p>
                </div>
                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135823.png"
                     class="w-32">
            </div>

            <!-- SECTION: FITUR -->
            <h3 class="text-xl font-semibold mt-10 mb-4">Fitur Dashboard</h3>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <!-- CARD 1 -->
                <div class="bg-white p-5 rounded-2xl shadow hover:shadow-lg transition">
                    <img src="https://cdn-icons-png.flaticon.com/512/1828/1828817.png"
                         class="w-14 mb-3">
                    <h4 class="font-bold text-lg mb-2">Ajukan Judul Skripsi</h4>
                    <p class="text-gray-600 text-sm mb-3">
                        Ajukan judul skripsi dan lihat status persetujuan.
                    </p>
                    <a href="#"
                       class="text-blue-700 font-semibold hover:underline">
                        Lihat Detail →
                    </a>
                </div>

                <!-- CARD 2 -->
                <div class="bg-white p-5 rounded-2xl shadow hover:shadow-lg transition">
                    <img src="https://cdn-icons-png.flaticon.com/512/2991/2991148.png"
                         class="w-14 mb-3">
                    <h4 class="font-bold text-lg mb-2">Riwayat Bimbingan</h4>
                    <p class="text-gray-600 text-sm mb-3">
                        Lihat catatan bimbingan dan progres skripsimu.
                    </p>
                    <a href="#"
                       class="text-blue-700 font-semibold hover:underline">
                        Lihat Detail →
                    </a>
                </div>

                <!-- CARD 3 -->
                <div class="bg-white p-5 rounded-2xl shadow hover:shadow-lg transition">
                    <img src="https://cdn-icons-png.flaticon.com/512/1828/1828721.png"
                         class="w-14 mb-3">
                    <h4 class="font-bold text-lg mb-2">Notifikasi</h4>
                    <p class="text-gray-600 text-sm mb-3">
                        Informasi terbaru dari dosen pembimbing & admin jurusan.
                    </p>
                    <a href="#"
                       class="text-blue-700 font-semibold hover:underline">
                        Lihat Detail →
                    </a>
                </div>

            </div>
        </main>
    </div>
</div>
@endsection

