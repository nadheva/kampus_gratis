<?php

namespace Database\Seeders;

use App\Models\Penelitian;
use Illuminate\Database\Seeder;

class PenelitianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Penelitian::factory(10)->create();
    }
}
