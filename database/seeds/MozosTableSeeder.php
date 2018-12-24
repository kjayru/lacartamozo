<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class MozosTableSeeder extends Seeder
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
        factory(App\Mozo::class, $Quantity)->create();
    }
}
