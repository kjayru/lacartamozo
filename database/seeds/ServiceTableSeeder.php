<?php

use Illuminate\Database\Seeder;
use App\Service;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
             'name' => 'Comer afuera',
             'description' => '', 
        ]);
        Service::create([
              'name' => 'Wi-Fi',
              'description' => '', 
        ]);
        Service::create([
              'name' => 'Sin reserva',
              'description' => '', 
        ]);
        Service::create([
              'name' => 'Se cobra cubierto',
              'description' => '', 
        ]);
        Service::create([
              'name' => 'Acceso para discapacitados',
              'description' => '', 
        ]);
        Service::create([
              'name' => 'Se aceptan mascotas',
              'description' => '', 
        ]);
        Service::create([
              'name' => 'Se puede ir en grupos',
              'description' => '', 
        ]);
        Service::create([
              'name' => 'Bar completo',
              'description' => '', 
        ]);
        Service::create([
              'name' => 'Estacionamiento',
              'description' => '', 
        ]);
        Service::create([
              'name' => 'Sin delivery',
              'description' => '', 
        ]);
        Service::create([
              'name' => 'Abierto 24 horas',
              'description' => '', 
        ]);
        Service::create([
              'name' => 'Comida para celiacos',
              'description' => '', 
        ]);
        Service::create([
              'name' => 'Comida vegetariana',
              'description' => '', 
        ]);
        Service::create([
              'name' => 'Sin gluten',
              'description' => '', 
        ]); 
    }
}
