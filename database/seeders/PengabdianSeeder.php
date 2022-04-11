<?php

namespace Database\Seeders;

use App\Models\Pengabdian;
use Illuminate\Database\Seeder;

class PengabdianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pengabdian::factory(10)->create();
    }
}
