<?php

use Illuminate\Database\Seeder;

class CategoryOrderDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Quantity = 30;
        factory(App\CategoryOrderDetail::class, $Quantity)->create();
    }
}
