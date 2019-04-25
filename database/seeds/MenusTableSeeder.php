<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Client;
use App\Menu;
use App\Category;

class MenusTableSeeder extends Seeder
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

        //para cliente y cada categoria de este se crean platos
        foreach($clients as $client){ 
            $categorias = Category::where('client_id',$client->id)->get(); 
            foreach($categorias as $categoria){  

                $price1 = 7 + $faker->randomNumber(2);
                $price2 = 4 + $faker->randomNumber(2);
                $descr = $faker->sentence(6);
                for($jj=0;$jj<4;$jj++){
                    Menu::create([
                        'titulo' =>  $faker->name,
                        'description' =>  $descr,
                        'price1' => $price1,
                        'price2' => $price2,
                        'igv' => '17',
                        'calories' => rand(1,1000).' KCal',
                        'cheff' => '1',
                        'celiaco' => '1',
                        'delivery'=>'1',
                        'vegetariano' => '1',
                        'state' => '1',
                        'category_id' => $categoria->id, 
                        'likes' => 0
                    ]);
                }
            } 
        }
    }
}
