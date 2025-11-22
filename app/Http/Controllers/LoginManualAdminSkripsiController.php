<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\AdminSkripsi;

class LoginManualAdminSkripsiController extends Controller
{
    public function index()
    {
        return view('pengajuan_skripsi.login_admin');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $admin = AdminSkripsi::where('username', $request->username)->first();

        if (!$admin) {
            return back()->with('error', 'Username tidak ditemukan');
        }

        if ($admin->password !== $request->password) {
            return back()->with('error', 'Password salah');
        }

        // Simpan session
        Session::put('admin_id', $admin->id);
        Session::put('admin_nama', $admin->nama_admin);

        return redirect()->route('adm.dashboard')->with('success', 'Login berhasil!');
    }

    public function dashboard()
    {
        // cek apakah admin sudah login
        if (!Session::has('admin_id')) {
            return redirect()->route('admin.login')->with('error', 'Silakan login dulu');
        }

        return view('pengajuan_skripsi.dashboard');
    }

    public function logout()
    {
        Session::flush();

        return redirect()->route('admin.login')->with('success', 'Logout berhasil');
    }
}