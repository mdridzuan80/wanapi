<?php

use App\Agama;
use Illuminate\Database\Seeder;

class AgamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Agama::create([
            'kod' => 'ISLAM',
            'nama' => 'ISLAM',
        ]);

        Agama::create([
            'kod' => 'BUDDHA',
            'nama' => 'BUDDHA',
        ]);

        Agama::create([
            'kod' => 'HINDU',
            'nama' => 'HINDU',
        ]);

        Agama::create([
            'kod' => 'KRISTIAN',
            'nama' => 'KRISTIAN',
        ]);

        Agama::create([
            'kod' => 'LAIN',
            'nama' => 'LAIN-LAIN',
        ]);
    }
}
