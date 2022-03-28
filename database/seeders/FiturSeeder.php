<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fitur;

class FiturSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fitur::factory(10)->create();
    }
}
