<?php

namespace App\Http\Controllers;

use App\Models\PengajuanSkripsi;
use Illuminate\Http\Request;

class AdminSkripsiController extends Controller
{
    // Tampilkan semua pengajuan
    public function index()
    {
        $pengajuan = PengajuanSkripsi::with('mahasiswa')->latest()->get();
        return view('admin_skripsi.index', compact('pengajuan'));
    }

    // Detail pengajuan
    public function show($id)
    {
        $pengajuan = PengajuanSkripsi::with('mahasiswa')->findOrFail($id);
        return view('admin_skripsi.show', compact('pengajuan'));
    }

    // Update status pengajuan (setuju/tolak)
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:Menunggu,Disetujui,Ditolak',
        ]);

        $pengajuan = PengajuanSkripsi::findOrFail($id);
        $pengajuan->update(['status' => $request->status]);

        return redirect()->route('admin.pengajuan.index')->with('success', 'Status pengajuan diperbarui!');
    }
}