<?php

use Illuminate\Database\Seeder;
use App\ClientService;
use App\Client;

class ClientServiceTableSeeder extends Seeder
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
                $idx = 0;
                do{
                    $idx = rand(3,11);            
                } while( ClientService::where([   ['service_id','=',$idx],  ['client_id','=',$client->id]  ])->first() );
 
                ClientService::create([
                    'client_id' => $client->id,
                    'service_id' => $idx, 
                ]);
            }
        }
    }
 

}
