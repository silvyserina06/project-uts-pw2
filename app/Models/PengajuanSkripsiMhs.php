<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PengajuanSkripsi extends Model
{
    protected $fillable = [
        'judul',
        'deskripsi',
        'status',
    ];
}
