<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class CustomerDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        $detailQuantity = 30;
        factory(App\CustomerDetail::class, $detailQuantity)->create();
    }
}
