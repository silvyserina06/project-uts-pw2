<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MhsSkripsi extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'mhs_skripsi';
    protected $primaryKey = 'id';

    // Kolom yang bisa diisi (mass assignment)
    protected $fillable = [
        'nim',
        'nama',
        'prodi',
        'password'
    ];

    // Relasi ke tabel pengajuan_skripsi
    public function pengajuanSkripsi()
    {
        return $this->hasMany(PengajuanSkripsi::class, 'mahasiswa_id');
    }
}