<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FiturFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'gambar' => $this->faker->imageUrl(640, 480, 'natural', true),
            'fitur' => $this->faker->sentence(2),
            'deskripsi' => $this->faker->paragraph(6),
            'created_at' => $this->faker->dateTimeBetween('-1 day'),
            'updated_at' => $this->faker->dateTimeBetween('-1 day'),
        ];
    }
}
