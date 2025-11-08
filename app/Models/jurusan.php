<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class jurusan extends Model
{
    protected $table = 'jurusans';
    use HasFactory;

    protected $fillable = [
        'namaJurusan',
        'kodeJurusan',
        'ketuaJurusan',
    ];
}
