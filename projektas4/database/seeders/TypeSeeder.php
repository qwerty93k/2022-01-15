<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //name, short_name, description
        //MB ribota atsakomybe
        //UAB ribota atsakomybe
        //IĮ neribota atsakomybe
        //AB ribota atsakomybe

        DB::table('types')->insert([
            'name' => 'Mažoji bendrija',
            'short_name' => 'MB',
            'description' => 'ribota atsakomybė',
        ]);
        DB::table('types')->insert([
            'name' => 'Uždaroji Akcinė Bendrovė',
            'short_name' => 'UAB',
            'description' => 'ribota atsakomybė',
        ]);
        DB::table('types')->insert([
            'name' => 'Individuali įmonė',
            'short_name' => 'Iį',
            'description' => 'neribota atsakomybė',
        ]);
        DB::table('types')->insert([
            'name' => 'Akcinė Bendrovė',
            'short_name' => 'AB',
            'description' => 'ribota atsakomybė',
        ]);
    }
}
