<?php

use App\Kursus;
use Illuminate\Database\Seeder;

class KursusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kursus::create([
            'kod' => 'A08-B',
            'nama' => 'TEKNOLOGI KIMPALAN',
        ]);

        Kursus::create([
            'kod' => 'L01',
            'nama' => 'DIPLOMA TEKNOLOGI ELEKTRIK (KUASA)',
        ]);
    }
}
