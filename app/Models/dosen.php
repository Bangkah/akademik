<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    protected $table = 'dosens';

    protected $fillable = [
        'namaDosen',
        'nidn',
        'jkel',
        'alamat',
        'tempatLahir',
        'tanggalLahir',
        'agama',
        'noTelp',
        'email',
    ];
}
