<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
 
use Faker\Factory as Faker;
 
 
class PegawaiSeeder extends Seeder
{
    /**
 	* Run the database seeds.
 	*
 	* @return void
 	*/
    public function run()
    {
 
    	$faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 50; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('mahasiswas')->insert([
    			'namaMahasiswa' => $faker->name,
                'nim' => $faker->unique()->numerify('2025########'),
    			'jkel' => $faker->numberBetween(25,40),
    			'alamat' => $faker->address,
                'tempatLahir' => $faker->city,
                'tanggalLahir' => $faker->date,
                'agama' => $faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu']),
                'noTelp' => $faker->phoneNumber,
                'noKK' => $faker->numerify('################'),
                'email' => $faker->unique()->safeEmail,
    		]);
 
    	}
 
    }
}
