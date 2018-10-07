<?php

use App\Jantina;
use Illuminate\Database\Seeder;

class JantinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jantina::create([
            'kod' => 'LELAKI',
            'nama' => 'LELAKI',
        ]);

        Jantina::create([
            'kod' => 'PEREMPUAN',
            'nama' => 'PEREMPUAN',
        ]);

        Jantina::create([
            'kod' => 'LAIN',
            'nama' => 'LAIN-LAIN',
        ]);
    }
}
