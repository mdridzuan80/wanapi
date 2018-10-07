<?php

use App\Kaum;
use Illuminate\Database\Seeder;

class KaumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kaum::create([
            'kod' => 'MELAYU',
            'nama' => 'MELAYU',
        ]);

        Kaum::create([
            'kod' => 'CINA',
            'nama' => 'CINA',
        ]);

        Kaum::create([
            'kod' => 'INDIA',
            'nama' => 'INDIA',
        ]);

        Kaum::create([
            'kod' => 'YAHUDI',
            'nama' => 'YAHUDI',
        ]);

        Kaum::create([
            'kod' => 'LAIN',
            'nama' => 'LAIN-LAIN',
        ]);
    }
}
