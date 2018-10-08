<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nokp' => '950416145457',
            'password' => bcrypt('123456'),
            'name' => 'ARIF ANUAR BIN ROSLI',
            'email' => 'arif@gmail.com' ,
            'api_token' => bcrypt('950416145457123456') ,
            'peranan_kod' => 'PELAJAR'
        ]);
    }
}
