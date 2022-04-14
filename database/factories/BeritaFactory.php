<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BeritaFactory extends Factory
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
            'slug' => $this->faker->slug(3),
            'isi' => $this->faker->paragraph(100),
            'penulis' => $this->faker->name(),
            'gambar' => $this->faker->imageUrl(640, 480, 'example', true),
            'category_id' => $this->faker->numberBetween(1, 4),
            'status' => $this->faker->randomElement(['live', 'draft']),
            'created_at' => $this->faker->dateTimeBetween('-1 day'),
            'updated_at' => $this->faker->dateTimeBetween('-1 day'),
        ];
    }
}
