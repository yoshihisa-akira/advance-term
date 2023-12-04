<?php

namespace Database\Seeders;

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
        $this->call(UsersTableSeeder::class);
        $this->call(GenresTableSeeder::class);
        $this->call(RegionsTableSeeder::class);
        $this->call(ShopsReservedTableSeeder::class);
        $this->call(ShopsTableSeeder::class);
    }
}
