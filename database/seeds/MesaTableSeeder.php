<?php

use Illuminate\Database\Seeder;
use App\Sector;
use App\Mesa; 
use Faker\Factory as Faker;


class MesaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sectors = Sector::all();
        $faker = Faker::create();  

        foreach($sectors as $sector){   
            $Quantity = 40;
            for($ii = 1; $ii<=$Quantity; $ii++){
                Mesa::create([
                    'client_id' => $sector->client_id, 
                    'codeqr' => '/dist/img/qr_sample.png',
                    'nummesas' =>  $ii,
                    'sector_id' => $sector->id, 
                ]);
            } 
        } 
    }
}
