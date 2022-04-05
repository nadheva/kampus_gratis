<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PenelitianFactory extends Factory
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
            'isi' => $this->faker->paragraph(3),
            'penulis' => $this->faker->name(),
            'status' => $this->faker->randomElement(['live', 'draft']),
            'created_at' => $this->faker->dateTimeBetween('-1 day'),
            'updated_at' => $this->faker->dateTimeBetween('-1 day'),
        ];
    }
}
