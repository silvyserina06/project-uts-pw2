<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaSkripsiDashboardController extends Controller
{
    public function index()
    {
        return view('mahasiswa-skripsi.dashboard');

    }

    public function profil()
    {
        return view('profilMhs_skripsi');
    }
}
