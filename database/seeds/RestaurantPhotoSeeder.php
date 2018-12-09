<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class RestaurantPhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        $restaurantQuantity = 60;
        factory(App\RestaurantPhoto::class, $restaurantQuantity)->create();
    }
}
