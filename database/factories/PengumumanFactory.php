<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PengumumanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->sentence(3),
            'isi' => $this->faker->realText($maxNbChars = 300, $indexSize = 3),
            'file' => $this->faker->word(),
            'created_at' => $this->faker->dateTimeBetween('-1 day'),
            'updated_at' => $this->faker->dateTimeBetween('-1 day'),
        ];
    }
}
