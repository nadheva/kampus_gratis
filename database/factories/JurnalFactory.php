<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JurnalFactory extends Factory
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
            'abstrak' => $this->faker->text(100),
            'isi' => $this->faker->paragraph(2),
            'penulis' => $this->faker->name(),
            'gambar' => $this->faker->imageUrl(640, 480, 'animals', true),
            'file' => $this->faker->word(),
            'created_at' => $this->faker->dateTimeBetween('-1 day'),
            'updated_at' => $this->faker->dateTimeBetween('-1 day'),
        ];
    }
}
