<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JurusanFactory extends Factory
{
    public function definition(): array
    {
        return [
            'namaJurusan' => $this->faker->randomElement([
                'Teknologi Informasi dan Komputer',
                'Bisnis',
                'Teknik Elektro',
                'Teknik Mesin',
                'Teknik Sipil',
                'Teknik Kimia',
            ]),
            'kodeJurusan' => strtoupper($this->faker->lexify('JRS???')),
            'ketuaJurusan' => $this->faker->name(),
        ];
    }
}
