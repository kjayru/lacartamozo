<?php

use Illuminate\Database\Seeder;

class UserClientLikeTableController extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Quantity = 20;
        factory(App\ClientPoint::class, $Quantity)->create();
    }
}
