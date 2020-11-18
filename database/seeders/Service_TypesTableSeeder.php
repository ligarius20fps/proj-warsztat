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
            ['name' => 'Wymiana płynu chłodniczego'],
            ['name' => 'Przegląd techniczny'],
            ['name' => 'Naprawa układu elektrycznego'],
            ['name' => 'Wulkanizacja'],
            ['name' => 'Naprawa silnika'],
            ['name' => 'Zamontowanie systemu audio'],
            ['name' => 'Naprawa systemu audio'],
            ['name' => 'Wymiana klocków hamulcowych'],
            ['name' => 'Instalacja LPG'],
            ['name' => 'Lakierowanie'],
            ['name' => 'Naprawa układu zawieszenia'],
            ['name' => 'Naprawa układu kierowniczego'],
            ['name' => 'Naprawa układu hamulcowego'],
            ['name' => 'Wymiana rozrządu'],
            ['name' => 'Wymiana opon'],
            ['name' => 'Wymiana pasów klinowych'],
            ['name' => 'Naprawa/wymiana sprzęgła'],
            ['name' => 'Naprawa/wymiana felg'],
            ['name' => 'Prostowanie/docinanie blach'],
            ['name' => 'Spawanie/lutowanie/zgrzewanie blach'],
            ['name' => 'Wymiana/założenie tapicerki'],
            ['name' => 'Tuning wizualny'],
            ['name' => 'Tuning techniczny'],
            ['name' => 'Naprawy gwarancyjne'],
        ]);
    }
}
