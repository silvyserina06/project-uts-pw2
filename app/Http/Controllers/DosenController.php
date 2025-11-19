<?php

namespace App\Http\Controllers;

use App\Models\DosenModel; 
use Illuminate\Http\Request;

class DosenController extends Controller
{
    // Tampilkan halaman list dosen
    public function index()
    {
        $dosens = DosenModel::all();  
        return view('dosen.index', compact('dosens'));
    }

    // Tampilkan form create
    public function create()
    {
        return view('dosen.create');
    }

    // Simpan data ke database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nip' => 'required',
            'namaLengkap' => 'required',
            'prodi' => 'required'
        ]);

        // Simpan ke database
        DosenModel::create([  
            'nip' => $request->nip,
            'nama_lengkap' => $request->namaLengkap,
            'prodi' => $request->prodi
        ]);

        // Redirect ke halaman dosen dengan pesan sukses
        return redirect()->route('dosen')->with('success', 'Data dosen berhasil ditambahkan!');
    }
}