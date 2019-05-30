<?php

use Illuminate\Database\Seeder;
use App\TypeSale;

class TypeSaleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeSale::create([
             'name' => 'delivery'
        ]);
        TypeSale::create([
            'name' => 'recoger en local'
        ]);    
        TypeSale::create([
             'name' => 'realizado dentro del local'
        ]);
    }
}
