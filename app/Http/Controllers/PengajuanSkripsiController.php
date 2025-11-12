<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajuanSkripsi;
use App\Models\MhsSkripsi;

class PengajuanSkripsiController extends Controller
{
    // Menampilkan daftar pengajuan skripsi
    public function index()
    {
        $pengajuan = PengajuanSkripsi::with('mahasiswa')->get();
        return view('pengajuan_skripsi.index_skripsi', compact('pengajuan'));
    }

    // Menampilkan form tambah pengajuan
    public function create()
    {
        $mahasiswa = MhsSkripsi::all();
        return view('pengajuan_skripsi.create_skripsi', compact('mahasiswa'));
    }

    // Proses simpan data pengajuan
    public function store(Request $request)
    {
        $request->validate([
            'mahasiswa_id' => 'required',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string'
        ]);

        PengajuanSkripsi::create([
            'mahasiswa_id' => $request->mahasiswa_id,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'status' => 'Menunggu'
        ]);

        return redirect()->route('pengajuan.index')->with('success', 'Pengajuan skripsi berhasil ditambahkan.');
    }

    // Menampilkan detail pengajuan
    public function show($id)
    {
        $pengajuan = PengajuanSkripsi::findOrFail($id);
        return view('pengajuan_skripsi.show_skripsi', compact('pengajuan'));
    }
}