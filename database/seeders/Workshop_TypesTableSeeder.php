<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Workshop_TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('workshop_types')->insert([
            ['name' => 'Warsztat Naprawczy'],
            ['name' => 'Warsztat Blacharsko-Lakierniczy'],
            ['name' => 'Warsztat Wulkanizacyjny'],
            ['name' => 'Warsztat Serwisowy'],
            ['name' => 'Autoryzowany Serwis'],
        ]);
    }
}
