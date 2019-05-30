<?php

use Illuminate\Database\Seeder;
use App\ClientConfiguration;
use App\Client;

class ClientConfigurationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clients = Client::all();
        foreach($clients as $client){
            for($i=0; $i<5; $i++){
                ClientConfiguration::create([
                    'client_id' => $client->id,
                    'configuration_id' => rand(6,11), 
                ]);
            }
        }
    }

    function checkUsed($client_id){
        $idx = 0;
        do{
            $idx = rand(3,9);            
        } while( ClientConfiguration::where([   ['configuration_id','=',$idx],  ['client_id','=',$client_id]
        ])->exist() );
        return $idx;
    }
}
