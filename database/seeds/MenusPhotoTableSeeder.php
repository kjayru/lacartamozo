<?php

use Illuminate\Database\Seeder;

class MenusPhotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        $Quantity = 60;
        factory(App\MenuPhoto::class, $Quantity)->create();
    }
}
