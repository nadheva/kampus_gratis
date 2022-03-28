<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sejarah' => $this->faker->paragraph(3),
            'latar_belakang' => $this->faker->paragraph(6),
            'visi' => $this->faker->sentence(3),
            'misi' => $this->faker->sentence(3),
            'identitas' => $this->faker->paragraph(4),
            'created_at' => $this->faker->dateTimeBetween('-1 day'),
            'updated_at' => $this->faker->dateTimeBetween('-1 day'),
        ];
    }
}
