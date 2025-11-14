<?php

namespace App\Http\Controllers;

use App\Models\MhsSkripsi;
use Illuminate\Http\Request;

class MahasiswaSkripsiController extends Controller
{
    public function index()
    {
        $mahasiswa = MhsSkripsi::orderBy('nama')->get();
        return view('pengajuan_skripsi.mahasiswa_index', compact('mahasiswa'));
    }

    public function edit($id)
    {
        $mhs = MhsSkripsi::findOrFail($id);
        return view('pengajuan_skripsi.mahasiswa_edit', compact('mhs'));
    }

    public function update(Request $request, $id)
    {
        $mhs = MhsSkripsi::findOrFail($id);

        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'prodi' => 'required',
        ]);

        $mhs->update($request->only(['nim', 'nama', 'prodi']));

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $mhs = MhsSkripsi::findOrFail($id);
        $mhs->delete();

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil dihapus.');
    }
}