<?php

use Illuminate\Database\Seeder;
use App\StateBuyed;

class StateBuyedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {    
        StateBuyed::create([
            'name' => 'solicitado'
        ]); 
        StateBuyed::create([
            'name' => 'cancelado'
        ]); 
        StateBuyed::create([
            'name' => 'pago'
        ]); 
    }
}
