<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MahasiswaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'namaMahasiswa' => $this->faker->name,
            'nim' => $this->faker->unique()->numberBetween(2024573010001, 2024573010999),
            'jkel' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'email' => $this->faker->unique()->safeEmail,
            'alamat' => $this->faker->city,
            'tempatLahir' => $this->faker->city,
            'tanggalLahir' => $this->faker->date(),
            'agama' => $this->faker->randomElement(['Islam', 'Kristen', 'Hindu', 'Budha']),
            'noKK' => $this->faker->unique()->numerify('################'),
            'noTelp' => $this->faker->unique()->numerify('08##########'),
        ];
    }
}
