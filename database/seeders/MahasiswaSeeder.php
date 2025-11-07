<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            [
                'namaMahasiswa' => 'Muhammad Dhiyaul Atha',
                'nim' => '2024573010001',
                'jkel' => 'Laki-laki',
                'alamat' => 'Banda Aceh',
                'tempatLahir' => 'Aceh Besar',
                'tanggalLahir' => '2003-04-12',
                'agama' => 'Islam',
                'noTelp' => '081234567891',
                'noKK' => '1212121212121212',
                'email' => 'atha@example.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'namaMahasiswa' => 'Siti Rahma',
                'nim' => '2024573010002',
                'jkel' => 'Perempuan',
                'alamat' => 'Lhokseumawe',
                'tempatLahir' => 'Langsa',
                'tanggalLahir' => '2004-06-22',
                'agama' => 'Islam',
                'noTelp' => '081234567892',
                'noKK' => '1313131313131313',
                'email' => 'siti.rahma@example.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'namaMahasiswa' => 'Firman Saputra',
                'nim' => '2024573010003',
                'jkel' => 'Laki-laki',
                'alamat' => 'Meulaboh',
                'tempatLahir' => 'Takengon',
                'tanggalLahir' => '2002-12-10',
                'agama' => 'Islam',
                'noTelp' => '081234567893',
                'noKK' => '1414141414141414',
                'email' => 'firman@example.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
