<?php

namespace Database\Seeders;

use App\Models\GuruBesar;
use Illuminate\Database\Seeder;

class GuruBesarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GuruBesar::factory(10)->create();
    }
}
