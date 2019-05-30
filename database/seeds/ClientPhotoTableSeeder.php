<?php

use Illuminate\Database\Seeder;
use App\ClientPhoto;

class ClientPhotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Quantity = 60;
        factory(ClientPhoto::class, $Quantity)->create();
    }
}
