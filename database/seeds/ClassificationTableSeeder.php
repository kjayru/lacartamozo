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
            'name' => 'Bebidas',
            'decription' => 'Bebidas '
        ]);

        Classification::create([
            'name' => 'Cafeteria',
            'decription' => 'Cafeteria '
        ]);

        Classification::create([
            'name' => 'Platos',
            'decription' => 'Platos principales '
        ]);

        Classification::create([
            'name' => 'Postres',
            'decription' => 'Postres'
        ]);
    }
}
