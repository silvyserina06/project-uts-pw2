<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanSkripsi extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'pengajuan_skripsi'; 
    protected $primaryKey = 'id';

    protected $fillable = [
        'mahasiswa_id',
        'judul',
        'deskripsi',
        'status'
    ];

    // Relasi ke mahasiswa (jika kamu sudah punya tabel mhs_skripsi)
    public function mahasiswa()
    {
        return $this->belongsTo(MhsSkripsi::class, 'mahasiswa_id');
    }
}