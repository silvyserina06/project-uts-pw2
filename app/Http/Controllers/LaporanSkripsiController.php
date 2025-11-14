<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajuanSkripsi;

class LaporanSkripsiController extends Controller
{
    public function index(Request $request)
    {
        $start = $request->start;
        $end = $request->end;

        $query = PengajuanSkripsi::with('mahasiswa');

        if ($start && $end) {
            $query->whereBetween('created_at', [
                $start . ' 00:00:00',
                $end . ' 23:59:59'
            ]);
        }

        $data = $query->orderBy('created_at', 'desc')->get();

        return view('pengajuan_skripsi.laporan_skripsi', compact('data', 'start', 'end'));
    }
}