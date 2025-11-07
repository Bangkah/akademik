<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    protected $table = 'jurusans';

    protected $fillable = [
        'namaJurusan',
        'kodeJurusan',
        'ketuaJurusan',
    ];
}
