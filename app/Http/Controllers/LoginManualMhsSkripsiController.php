<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MhsSkripsi;
use Illuminate\Support\Facades\Session;

class LoginManualMhsSkripsiController extends Controller
{
    //  Menampilkan halaman login
    public function index()
    {
        return view('pengajuan_skripsi.mahasiswa.loginmanual');
    }

    //  Proses login mahasiswa
    public function login(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'password' => 'required'
        ]);

        // Cari mahasiswa berdasarkan NIM
        $user = MhsSkripsi::where('nim', $request->nim)->first();

        if (!$user) {
            return back()->with('error', 'NIM tidak ditemukan');
        }

        // Cek password plaintext
        if ($user->password !== $request->password) {
            return back()->with('error', 'Password salah');
        }

        // Simpan data login ke session
        Session::put('mhs_id', $user->id);
        Session::put('mhs_nama', $user->nama);

        return redirect()->route('dashboard.mhs')->with('success', 'Login berhasil!');
    }

    // Halaman dashboard setelah login
    public function dashboard()
    {
        if (!Session::has('mhs_id')) {
            return redirect()->route('login.mhs');
        }

        return view('pengajuan_skripsi.mahasiswa.dashboard');
    }

}