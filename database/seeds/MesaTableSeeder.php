<?php

use Illuminate\Database\Seeder;

class MesaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        $Quantity = 200;
        factory(App\Mesa::class, $Quantity)->create();
    }
}
