<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index() {
       // echo "ini dicetak dari controller"
        return view('mhs-baru');
    }
    public function khsView() { 
        return view('khsView');
    }
    public function krsView() { 
        return view('krsView');
    }
}