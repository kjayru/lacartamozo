<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class FranchiseTableSeeder extends Seeder
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
        factory(App\Franchise::class, $Quantity)->create();
    }
}
