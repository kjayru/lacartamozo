<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Client;
use App\Sector;

class SectorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $clients = Clients::all();
        $faker = Faker::create();  

        foreach($clients as $client){  
            Sector::create([
                'name' => $faker->name, 
            ]);
        } 
    }
}
