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
        App\User::create([
        'nama'	=> str_random(20),
        'email'	=> str_random(10) . '@codepolitan.com',
        'password'	=> bcrypt('secret')
    ]);
    }
}
