<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
class PersonalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        $Quantity = 300;
        factory(App\Personal::class, $Quantity)->create();
    }
}
