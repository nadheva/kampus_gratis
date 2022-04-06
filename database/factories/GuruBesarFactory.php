<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GuruBesarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'foto' => $this->faker->imageUrl(640, 480, 'natural', true),
            'lulusan' => $this->faker->year('+10 years'),
            'pekerjaan' => $this->faker->jobTitle(),
            'deskripsi' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'created_at' => $this->faker->dateTimeBetween('-1 day'),
            'updated_at' => $this->faker->dateTimeBetween('-1 day'),
        ];
    }
}
