<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use App\Restaurant;

class RestaurantTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        $restaurantQuantity = 30;
        factory(Restaurant::class, $restaurantQuantity)->create();
        
    }

}