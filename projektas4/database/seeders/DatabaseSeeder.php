<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Client;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database. php artisan migrate:fresh --seed komanda kad sukurtu randomus 
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //Client::factory()->count(30)->create();
        //Company::factory()->count(10)->create();
        //kad nedubliuoti koda, rasome taip

        $this->call([
            CompanySeeder::class,
            ClientSeeder::class
        ]);
    }
}
