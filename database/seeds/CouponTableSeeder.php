<?php

use Illuminate\Database\Seeder;

class CouponTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Quantity = 40;
        factory(App\Coupon::class, $Quantity)->create();
    }
}
