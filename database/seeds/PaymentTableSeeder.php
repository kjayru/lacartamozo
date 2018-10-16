<?php

use Illuminate\Database\Seeder;

class PaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Quantity = 40;
        factory(App\Payment::class, $Quantity)->create();
    }
}
