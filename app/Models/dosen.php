<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class dosen extends Model
{
    protected $table = 'dosens';
    use HasFactory;

    protected $fillable = [
        'namaDosen',
        'nidn',
        'jabatan',
        'jkel',
        'alamat',
        'tempatLahir',
        'tanggalLahir',
        'agama',
        'noTelp',
        'email',
    ];
}
