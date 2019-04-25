<?php

use Illuminate\Database\Seeder;

class GiftTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Quantity = 40;
        factory(App\Gift::class, $Quantity)->create();
    }
}
