<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa2;
use Illuminate\Http\Request;

class Mahasiswa2Controller extends Controller
{
    // Tampilkan semua data
    public function index()
    {
        $mahasiswa = Mahasiswa2::all();
        return view('index', compact('mahasiswa'));
    }

    // Tampilkan form input
    public function create()
    {
        return view('input');
    }

    // Simpan data
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|unique:mahasiswa2',
            'nama' => 'required',
            'prodi' => 'required',
            'semester' => 'required',
            'kelas' => 'required',
            'alamat' => 'required',
        ]);

        Mahasiswa2::create($request->all());

        return redirect()->route('mahasiswa2.index')->with('success', 'Data berhasil ditambahkan!');
    }

    // Hapus data
    public function destroy($id)
    {
        Mahasiswa2::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus!');
    }
}