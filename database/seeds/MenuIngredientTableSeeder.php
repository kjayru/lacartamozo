<?php

use Illuminate\Database\Seeder;

class MenuIngredientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        $Quantity = 100;
        factory(App\MenuIngredient::class, $Quantity)->create();

    }
}
