<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PrestasiFactory extends Factory
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
            'penulis' => $this->faker->name(),
            'gambar' => $this->faker->imageUrl(640, 480, 'animals', true),
            'tahun' => $this->faker->year('+10 years'),
            'jenis' => $this->faker->randomElement(['Mahasiswa', 'Dosen', 'Lembaga']),
            'status' => $this->faker->randomElement(['live', 'draft']),
            'created_at' => $this->faker->dateTimeBetween('-1 day'),
            'updated_at' => $this->faker->dateTimeBetween('-1 day'),
        ];
    }
}
