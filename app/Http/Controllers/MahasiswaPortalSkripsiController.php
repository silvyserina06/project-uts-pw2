<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MhsSkripsi;
use App\Models\PengajuanSkripsi;

class MahasiswaPortalSkripsiController extends Controller
{
    // Dashboard sementara
    public function dashboard()
    {
        $total = PengajuanSkripsi::count();
        $disetujui = PengajuanSkripsi::where('status', 'Disetujui')->count();
        $ditolak = PengajuanSkripsi::where('status', 'Ditolak')->count();

        return view('pengajuan_skripsi.mahasiswa.dashboard', compact('total','disetujui','ditolak'));
    }

    // Form ajukan skripsi
    public function ajukanForm()
    {
        return view('pengajuan_skripsi.mahasiswa.ajukanjudulskripsi');
    }

    // Submit pengajuan
    public function ajukanStore(Request $request)
    {
        $request->validate([
            'nim' => 'required|exists:mhs_skripsi,nim',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        $mahasiswa = MhsSkripsi::where('nim', $request->nim)->first();

        PengajuanSkripsi::create([
            'mahasiswa_id' => $mahasiswa->id,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'status' => 'Menunggu'
        ]);

        return redirect()->back()->with('success', 'Pengajuan berhasil dikirim!');
    }

    // Riwayat pengajuan berdasarkan NIM
    public function riwayatskripsi(Request $request)
    {
        $riwayat = collect(); // default kosong

        if ($request->has('nim')) {
            $mahasiswa = MhsSkripsi::where('nim', $request->nim)->first();
            if ($mahasiswa) {
                $riwayat = PengajuanSkripsi::where('mahasiswa_id', $mahasiswa->id)
                            ->orderBy('created_at','desc')
                            ->get();
            }
        }

        return view('pengajuan_skripsi.mahasiswa.riwayatskripsi', compact('riwayat'));
    }
}