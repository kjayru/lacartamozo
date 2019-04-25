<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use App\Category;
use App\Client;
use Faker\Factory as Faker;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clients = Client::all();
        $faker = Faker::create(); 

        //para cada cliente creamos su categoria
        foreach($clients as $client){ 

            //categoria que en app tiene vista especial, guarnicion
            Category::create([
                'name' => 'Bebidas', 
                'photo' => \Faker\Provider\Image::image('public/storage/categories',400,250, 'food', false),
                'status' => '1',
                'client_id'=>$client->id,
                'es_guarnicion'  => 1,
                'is_chef_suggerences'  => 0,
                'is_menu_day'  => 0,
            ]);

            //categoria que en app tiene vista especial, sugerencias del chef
            Category::create([
                'name' => 'Sugerencias del chef', 
                'photo' => \Faker\Provider\Image::image('public/storage/categories',400,250, 'food', false),
                'status' => '1',
                'client_id'=>$client->id,
                'es_guarnicion'  => 0,
                'is_chef_suggerences'  => 1,
                'is_menu_day'  => 0,
            ]);

            //categoria que en app tiene vista especial, menu del dia
                Category::create([
                    'name' => 'Menu del dia', 
                    'photo' => \Faker\Provider\Image::image('public/storage/categories',400,250, 'food', false),
                    'status' => '1',
                    'client_id'=>$client->id,
                    'es_guarnicion'  => 0,
                    'is_chef_suggerences'  => 0,
                    'is_menu_day'  => 1,
                ]);

            for($jj=0;$jj<2;$jj++){
                Category::create([
                    'name' => $faker->name, 
                    'photo' => \Faker\Provider\Image::image('public/storage/categories',400,250, 'food', false),
                    'status' => '1',
                    'client_id'=>$client->id,
                    'es_guarnicion'  => 0,
                    'is_chef_suggerences'  => 0,
                    'is_menu_day'  => 0,
                ]);
            }
        } 

    }
}
