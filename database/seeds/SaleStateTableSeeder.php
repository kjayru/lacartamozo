<?php

use Illuminate\Database\Seeder;
use App\SaleState;

class SaleStateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SaleState::create([
            'name' => 'solicitado'
        ]);
        SaleState::create([
            'name' => 'en preparacion'
        ]);
        SaleState::create([
            'name' => 'terminado de preparar'
        ]);
        SaleState::create([
            'name' => 'espera de entrega al cliente'
        ]);
        SaleState::create([
            'name' => 'enviando'
        ]);
        SaleState::create([
            'name' => 'entregado'
        ]);
        SaleState::create([
            'name' => 'pago'
        ]);
        SaleState::create([
            'name' => 'cancelado'
        ]);
    }
}
