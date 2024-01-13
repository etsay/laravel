<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'tanggal_lahir',
        'alamat',
        'no_hp',
        'alamat_email',
        'pendidikan_terakhir',
        'file_pdf',
    ];
}