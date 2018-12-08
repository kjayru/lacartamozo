<?php

use Illuminate\Database\Seeder;

class CustomerLocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        $Quantity = 30;
        factory(App\CustomerLocation::class, $Quantity)->create();
    }
}
