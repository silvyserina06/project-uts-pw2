<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaPortalSkripsiController extends Controller
{
    public function storePengajuan(Request $request)
{
    $request->validate([
        'judul' => 'required|string|max:255',
        'deskripsi' => 'nullable|string',
    ]);

    PengajuanSkripsi::create([
        'mahasiswa_id' => auth()->user()->id, 
        'judul' => $request->judul,
        'deskripsi' => $request->deskripsi,
        'status' => 'Pending'
    ]);

    return redirect()->route('mhs.status')->with('success', 'Pengajuan berhasil dikirim!');
}
    // DASHBOARD
    public function dashboard()
{
    return view('pengajuan_skripsi.mahasiswa.dashboard');
}

public function ajukanjudulskripsi()
{
    return view('pengajuan_skripsi.mahasiswa.ajukanjudulskripsi');
}

public function status()
{
    $pengajuan = \App\Models\PengajuanSkripsi::where('mahasiswa_id', 1)->get();
    // sementara pakai ID 1 karena login belum ada

    return view('pengajuan_skripsi.mahasiswa.status', compact('pengajuan'));
}
}