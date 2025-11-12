<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdamController extends Controller
{
    public function index()
    {
        return view('pdam');
    }

    public function hitung(Request $request)
    {
        $pemakaian = $request->input('pemakaian');
        $total = 0;

        if ($pemakaian <= 40) {
            $total = $pemakaian * 3000;
        } elseif ($pemakaian <= 80) {
            $total = (40 * 3000) + (($pemakaian - 40) * 6000);
        } elseif ($pemakaian <= 120) {
            $total = (40 * 3000) + (40 * 6000) + (($pemakaian - 80) * 8000);
        } else {
            $total = (40 * 3000) + (40 * 6000) + (40 * 8000) + (($pemakaian - 120) * 12000);
        }

        return view('pdam', compact('pemakaian', 'total'));
    }
}
