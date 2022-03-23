<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserQuestion;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserQuestion::create([
            'id' => '1',
            'user' => 'Unknown',
            'ask' => 'Apa itu kampus gratis?',
            'isanswer' => '1'
        ]);
    }
}
