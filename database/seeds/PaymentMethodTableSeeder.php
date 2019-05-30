<?php

use Illuminate\Database\Seeder;
use App\PaymentMethod;

class PaymentMethodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentMethod::create([
             'name' => 'efectivo'
        ]);
        PaymentMethod::create([
             'name' => 'tarjeta de credito'
        ]);
        PaymentMethod::create([
             'name' => 'tarjeta de debito'
        ]);
    }
}
