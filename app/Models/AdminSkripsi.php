<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminSkripsi extends Model
{
    use HasFactory;

    protected $table = 'admin_skripsi'; // nama tabel di database
    protected $primaryKey = 'id';

    protected $fillable = [
        'username',
        'nama_admin',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}