<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jurusan;
use App\Models\Prodi;
use App\Models\Dosen;
use App\Models\Mahasiswa;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Jurusan::factory(5)->create();
        Prodi::factory(5)->create();
        Dosen::factory(10)->create();
        Mahasiswa::factory(30)->create();
    }
}
