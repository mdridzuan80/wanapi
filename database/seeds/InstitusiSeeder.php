<?php

use App\Institusi;
use Illuminate\Database\Seeder;

class InstitusiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Institusi::create([
            'kod' => 'ILPKL01',
            'nama' => 'ILP KUALA LUMPUR',
            'alamat' => 'SETAPAK, KUALA LUMPUR',
        ]);

        Institusi::create([
            'kod' => 'ILPKL02',
            'nama' => 'ILP KUALA LUMPUR',
            'alamat' => 'CHERAS, KUALA LUMPUR',
        ]);
    }
}
