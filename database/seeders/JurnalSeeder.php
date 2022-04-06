<?php

namespace Database\Seeders;

use App\Models\Jurnal;
use Illuminate\Database\Seeder;

class JurnalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jurnal::factory(10)->create();
    }
}
