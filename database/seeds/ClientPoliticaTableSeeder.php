<?php

use Illuminate\Database\Seeder;
use App\ClientPolitica;
use Faker\Factory as Faker;

class ClientPoliticaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(1, 50) as $i) {
            $id_client = $i;
            $precios = "Desde ".rand(5,25)." hasta ".rand( 30, 120);
            $politicas = "politicas del restaurante ".rand(1,50);
            $faker = Faker::create(); 
            
            ClientPolitica::create([
                'client_id' => $id_client,
                'rango_precios' => $precios,
                'webpage' => $faker->url,
                'politicas' =>  $politicas  
            ]);
        }
    }

    

}
