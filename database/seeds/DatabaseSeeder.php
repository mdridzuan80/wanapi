<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(AgamaSeeder::class);
        $this->call(KaumSeeder::class);
        $this->call(NegeriSeeder::class);
        $this->call(JantinaSeeder::class);
    }
}
