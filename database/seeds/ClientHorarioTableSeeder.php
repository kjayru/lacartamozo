<?php

use Illuminate\Database\Seeder;
use App\Client;
use App\ClientHorario;

class ClientHorarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clients = Client::all();
        $init = rand(6,11);
        $end = rand(16,23);

        foreach($clients as $client){
            for($i = 0; $i<7; $i++){
                ClientHorario::create([
                    'client_id' => $client->id,
                    'init' => $init,
                    'end' => $end,
                    'day' => $i
                ]);
            }
        }  
    }
}
