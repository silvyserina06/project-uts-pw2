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
        $pengajuan = PengajuanSkripsi::with('mahasiswa')->findOrFail($id);
        return view('pengajuan_skripsi.show_skripsi', compact('pengajuan'));
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $pengajuan = PengajuanSkripsi::findOrFail($id);
        $mahasiswa = MhsSkripsi::all();
        return view('pengajuan_skripsi.edit_skripsi', compact('pengajuan', 'mahasiswa'));
    }

    // Proses update data pengajuan
    public function update(Request $request, $id)
    {
        $request->validate([
            'mahasiswa_id' => 'required',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'status' => 'required|string'
        ]);

        $pengajuan = PengajuanSkripsi::findOrFail($id);
        $pengajuan->update($request->all());

        return redirect()->route('pengajuan.index')->with('success', 'Data pengajuan berhasil diperbarui.');
    }

    // Hapus data pengajuan
    public function destroy($id)
    {
        $pengajuan = PengajuanSkripsi::findOrFail($id);
        $pengajuan->delete();

        return redirect()->route('pengajuan.index')->with('success', 'Data pengajuan berhasil dihapus.');
    }
}