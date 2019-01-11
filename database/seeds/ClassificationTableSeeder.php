<?php

use Illuminate\Database\Seeder;
use App\Classification;
class ClassificationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Classification::create([
            'name' => 'Restaurants',
            'decription' => 'restuarantes de todo tipo '
        ]);

        Classification::create([
            'name' => 'Comida rapida',
            'decription' => 'Comidas rapidas '
        ]);

        Classification::create([
            'name' => 'Panificación',
            'decription' => 'Tortas pasteles'
        ]);

        
    }
}
