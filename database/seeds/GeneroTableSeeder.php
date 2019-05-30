<?php

use Illuminate\Database\Seeder;
use App\Genero;

class GeneroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genero::create([
            'name' => 'masculino'
        ]);
        Genero::create([
            'name' => 'femenino'
        ]);
    }
}
