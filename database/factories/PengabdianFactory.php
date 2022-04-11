<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PengabdianFactory extends Factory
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
            'isi' => $this->faker->paragraph(2),
            'gambar' => $this->faker->imageUrl(640, 480, 'animals', true),
            'created_at' => $this->faker->dateTimeBetween('-1 day'),
            'updated_at' => $this->faker->dateTimeBetween('-1 day'),
        ];
    }
}
