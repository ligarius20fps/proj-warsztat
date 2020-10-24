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
        $this->call([
            VoivodeshipsTableSeeder::class, 
            CitiesTableSeeder::class, 
            Workshop_TypesTableSeeder::class,
            AddressesTableSeeder::class,
            WorkshopsTableSeeder::class
        ]);
    }
}
