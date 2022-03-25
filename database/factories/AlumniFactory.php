<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AlumniFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->sentence(3),
            'foto' => $this->faker->imageUrl(640, 480, 'natural', true),
            'program_studi' => $this->faker->sentence(2),
            'lulusan' => $this->faker->year(),
            'program' => $this->faker->randomElement(['formal', 'project', 'kursus']),
            'deskripsi' => $this->faker->paragraph(4),
            'created_at' => $this->faker->dateTimeBetween('-1 day'),
            'updated_at' => $this->faker->dateTimeBetween('-1 day'),
        ];
    }
}
