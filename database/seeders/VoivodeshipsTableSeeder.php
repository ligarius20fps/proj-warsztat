<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoivodeshipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('voivodeships')->insert([
         ['name' => 'Zachodnio-Pomorskie'],
         ['name' => 'Pomorskie'],
         ['name' => 'Warmińsko-Mazurskie'],
         ['name' => 'Podlaskie'],
         ['name' => 'Lubuskie'],
         ['name' => 'Wielkopolskie'],
         ['name' => 'Kujawsko-Pomorskie'],
         ['name' => 'Mazowieckie'],
         ['name' => 'Dolnośląskie'],
         ['name' => 'Łódzkie'],
         ['name' => 'Świętokrzyskie'],
         ['name' => 'Lubelskie'],
         ['name' => 'Opolskie'],
         ['name' => 'Sląskie'],
         ['name' => 'Małopolskie'],
         ['name' => 'Podkarpackie'],
        ])
    }
}
