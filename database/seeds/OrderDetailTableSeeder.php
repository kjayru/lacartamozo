<?php

use Illuminate\Database\Seeder;

class OrderDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $Quantity = 40;
        factory(App\OrderDetail::class, $Quantity)->create();
    }
}
