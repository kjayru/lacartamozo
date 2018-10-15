<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use App\RestaurantDetail;

class RestaurantDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        $restaurantQuantity = 30;
        factory(RestaurantDetail::class, $restaurantQuantity)->create();
        
    }
}
