<?php

use App\Markah;
use Illuminate\Database\Seeder;

class MarkahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Markah::create([
            'nokp' => '940126036499',
            'kursus_kod' => 'A08-B',
            'subjek_kod' => 'A08-01-21',
            'jumlah' => 65
        ]);

        Markah::create([
            'nokp' => '940126036499',
            'kursus_kod' => 'A08-B',
            'subjek_kod' => 'A08-01-22',
            'jumlah' => 77
        ]);

        Markah::create([
            'nokp' => '940126036499',
            'kursus_kod' => 'A08-B',
            'subjek_kod' => 'A08-01-23',
            'jumlah' => 70
        ]);
    }
}
