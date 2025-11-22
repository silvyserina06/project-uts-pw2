<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class MhsSkripsi extends Authenticatable
{
    use Notifiable;

    protected $table = 'mhs_skripsi';
    protected $primaryKey = 'id';
    protected $fillable = ['nim', 'nama', 'prodi', 'password'];
    protected $hidden = ['password', 'remember_token'];

    public function pengajuanSkripsi()
    {
        return $this->hasMany(PengajuanSkripsi::class, 'mahasiswa_id');
    }
}