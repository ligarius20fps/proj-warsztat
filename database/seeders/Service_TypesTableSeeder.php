<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Service_TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_types')->insert([
            ['name' => 'Wymiana oleju'],
            ['name' => 'Przegląd techniczny'],
            ['name' => 'Naprawa układu elektrycznego'],
            ['name' => 'Wulkanizacja'],
            ['name' => 'Naprawa silnika'],
            ['name' => 'Zamontowanie systemu audio'],
            ['name' => 'Wymiana klocków hamulcowych'],
            ['name' => 'Instalacja LPG'],
        ]);
    }
}
