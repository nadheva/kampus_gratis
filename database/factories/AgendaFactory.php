<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AgendaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->sentence(2),
            'jenis' => $this->faker->randomElement(['Kuliah Reguler', 'Bimbingan Akademik', 'PKM-P', 'PKM-K', 'PKM-M', 'PKM-T', 'PKM-KC', 'Tugas Akhir', 'Magang', 'Proyek Penelitian']),
            'gambar' => $this->faker->imageUrl(640, 480, 'natural', true),
            'tanggal' => $this->faker->date('Y_m_d'),
            'deskripsi' => $this->faker->paragraph(4),
            'created_at' => $this->faker->dateTimeBetween('-1 day'),
            'updated_at' => $this->faker->dateTimeBetween('-1 day'),
        ];
    }
}
