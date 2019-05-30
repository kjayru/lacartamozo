<?php

use Illuminate\Database\Seeder;

class UserClientPointTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Quantity = 30;
        factory(App\UserClientPoint::class, $Quantity)->create();
    }
}
