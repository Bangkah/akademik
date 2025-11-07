<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MahasiswaTableSeeder extends Seeder
{
    /** 
     * Run the database seeds.
     */
   
        public function run(): void
    {
        $mahasiswa = [
            (new \App\Models\Mahasiswa())->namaMahasiswa('Budi Santoso')->nim('12345678')->jkel('L')->alamat('Jl.
Merdeka No.
1')->tempatLahir('Jakarta')
->tanggalLahir('1999-05-10')
->agama('Islam')
->tempatLahir('Jakarta')
->tanggalLahir('1999-05-10')
->agama('Islam')->
noTelp('08123456789')->
noKK('1345')
->email('budi@example.com')
->id_program_studi(1),
            (new \App\Models\Mahasiswa())->namaMahasiswa('Siti Aminah')->nim('98765432')->jkel('P')->alamat('Jl.
Sudirman No.
2')->tempatLahir('Surabaya')
->tanggalLahir('1985-12-20')
->agama('Islam')
->noTelp('085777777777')
->noKK('67890')
->tempatLahir('Surabaya')
->tanggalLahir('1985-12-20')
->agama('Islam')
->noTelp('085777777777')
->noKK('67890')
->email('siti@example.com')->id_program_studi(1),
        ];

        \App\Models\Mahasiswa::insert($mahasiswa);
    }
    }

