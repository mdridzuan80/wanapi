<?php

use App\Pelajar;
use Illuminate\Database\Seeder;

class PelajarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pelajar::create([
            'no_matrik' => '01116125',
            'nokp' => '950416145457',
            'nama' => 'ARIF ANUAR BIN ROSLI',
            'jantina_kod' => 'LELAKI',
            'tkh_lahir' => '1995-04-16',
            'sesi_kemasukan' => '1/2016',
            'alamat' => 'BLOK  6-0-8 JALAN 6/127, TMN GEMBIRA JALAN KUCHAI LAMA',
            'poskod' => '58200',
            'bandar' => 'KUALA LUMPUR',
            'negeri_kod' => '14'
        ]);
    }
}
