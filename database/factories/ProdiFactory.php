<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProdiFactory extends Factory
{
    public function definition(): array
    {
        return [
            'namaProdi' => $this->faker->randomElement([
                'D4 Teknik Informatika',
                'D4 Teknologi Rekayasa Komputer dan Jaringan',
                'D4 Teknologi Rekayasa Multimedia',
            ]),
            'kodeProdi' => strtoupper($this->faker->bothify('PRD###')),
            'kaprodi' => $this->faker->name(),
        ];
    }
}
