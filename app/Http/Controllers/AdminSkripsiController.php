<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajuanSkripsi;

class AdminSkripsiController extends Controller
{
    public function index()
    {
        $total = PengajuanSkripsi::count();
        $disetujui = PengajuanSkripsi::where('status', 'Disetujui')->count();
        $ditolak = PengajuanSkripsi::where('status', 'Ditolak')->count();

        $pengajuanTerbaru = PengajuanSkripsi::latest()->take(5)->get();

        return view('pengajuan_skripsi.dashboard', compact('total', 'disetujui', 'ditolak', 'pengajuanTerbaru'));
    }
}
