<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DosenFactory extends Factory
{
    public function definition(): array
    {
        return [
            'namaDosen' => $this->faker->name(),
            'nidn' => $this->faker->unique()->numerify('########'), // 8 angka acak
            'jkel' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'jabatan' => $this->faker->randomElement(['Asisten Ahli', 'Lektor', 'Lektor Kepala', 'Guru Besar']),
            'alamat' => $this->faker->address(),
            'tempatLahir' => $this->faker->city(),
            'tanggalLahir' => $this->faker->date(),
            'agama' => $this->faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha']),
            'noTelp' => $this->faker->unique()->numerify('08##########'),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
