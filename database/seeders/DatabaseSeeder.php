<?php

namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            QuestionSeeder::class,
            KategoriBeritaSeeder::class,
            BeritaSeeder::class,
            FaqSeeder::class,
            UserSeeder::class,
            AgendaSeeder::class,
            AlumniSeeder::class,
            BannerSeeder::class,
            DetailSeeder::class,
            FiturSeeder::class,
            GuruBesarSeeder::class,
            JurnalSeeder::class,
            PenelitianSeeder::class,
            PengabdianSeeder::class,
            PengumumanSeeder::class,
            PrestasiSeeder::class,
        ]);
    }
}
