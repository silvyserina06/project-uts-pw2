<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\DosenModel;

class DosenController extends Controller
{
  public function index() {
     return view('dosen.index');
    }
  public function create() {
    return view('dosen.create');
  }
  public function simpan(Request $request) {
      $dataDosen = new Dosen;
      $dataDosen->save();
    return ridect('/dosenIndex');
  }
}