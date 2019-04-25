<?php

use Illuminate\Database\Seeder;
use App\Configuration;

class ConfigurationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Configuration::create([
            'name' => 'Delivery',
            'description' => '', 
        ]);
       Configuration::create([
            'name' => 'Promociones',
            'description' => '', 
        ]);
       Configuration::create([
            'name' => 'Ver precio en el carro',
            'description' => '', 
        ]);
       Configuration::create([
            'name' => 'Redes sociales',
            'description' => '', 
        ]);
       Configuration::create([
            'name' => 'Publicidad',
            'description' => '', 
        ]);
       Configuration::create([
            'name' => 'Marketing',
            'description' => '', 
        ]);
       Configuration::create([
            'name' => 'Cobrar cubiertos',
            'description' => '', 
        ]);
       Configuration::create([
            'name' => 'Mozo',
            'description' => '', 
        ]);
       Configuration::create([
            'name' => 'Sistema de puntos',
            'description' => '', 
        ]);
       Configuration::create([
            'name' => 'Ver precio en la carta',
            'description' => '', 
        ]);
       Configuration::create([
            'name' => 'Avisos',
            'description' => '', 
        ]);
       Configuration::create([
            'name' => 'Mensajes push',
            'description' => '', 
        ]);
       Configuration::create([
            'name' => 'Idiomas',
            'description' => '', 
        ]);
       Configuration::create([
            'name' => 'Precios totales en cuenta',
            'description' => '', 
        ]);
    }
}
