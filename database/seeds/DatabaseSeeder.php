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
        //$this->call(UserSeeder::class);
        //$this->call(ItemSeeder::class);
        //$this->call(web_mspaSeeder::class);
        //$this->call(SeccionSeeder::class);
        $this->call(SunoitaSeeder::class);


    }
}
