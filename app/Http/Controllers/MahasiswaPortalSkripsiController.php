<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajuanSkripsi;

class MahasiswaPortalSkripsiController extends Controller
{
    // Dashboard mahasiswa
    public function dashboard()
    {
        $id = auth()->user()->id;

        $total = PengajuanSkripsi::where('mahasiswa_id', $id)->count();
        $disetujui = PengajuanSkripsi::where('mahasiswa_id', $id)->where('status', 'Disetujui')->count();
        $ditolak = PengajuanSkripsi::where('mahasiswa_id', $id)->where('status', 'Ditolak')->count();

        return view('pengajuan_skripsi.mahasiswa.dashboard', compact('total', 'disetujui', 'ditolak'));
    }

    // Riwayat pengajuan
    public function riwayat()
    {
        $riwayat = PengajuanSkripsi::where('mahasiswa_id', auth()->user()->id)
                    ->orderBy('created_at', 'desc')
                    ->get();

        return view('pengajuan_skripsi.mahasiswa.riwayatskripsi', compact('riwayat'));
    }

    // Form ajukan judul
    public function ajukanForm()
    {
        return view('pengajuan_skripsi.mahasiswa.ajukanskripsi');
    }

    // Submit pengajuan
    public function ajukanStore(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        PengajuanSkripsi::create([
            'mahasiswa_id' => auth()->user()->id,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'status' => 'Menunggu'
        ]);

        return redirect()->route('mahasiswa.riwayatskripsi')
            ->with('success', 'Pengajuan berhasil dikirim!');
    }
}