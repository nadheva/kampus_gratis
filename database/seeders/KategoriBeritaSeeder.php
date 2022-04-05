<?php

namespace Database\Seeders;

use App\Models\KategoriBerita;
use Illuminate\Database\Seeder;

class KategoriBeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KategoriBerita::create([
            'name' => 'Pendidikan',
            'slug' => 'pendidikan',
        ]);
        KategoriBerita::create([
            'name' => 'Prestasi',
            'slug' => 'prestasi',
        ]);
        KategoriBerita::create([
            'name' => 'Penilitian',
            'slug' => 'penilitian',
        ]);
        KategoriBerita::create([
            'name' => 'Pengabdian',
            'slug' => 'pengabdian',
        ]);
    }
}
