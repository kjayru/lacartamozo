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
            'decription' => 'restuarantes de todo tipo ',
            'cover' => \Faker\Provider\Image::image('public/storage/classifications',320,160, 'food', false)
        ]);

        Classification::create([
            'name' => 'Comida rapida',
            'decription' => 'Comidas rapidas ',
            'cover' => \Faker\Provider\Image::image('public/storage/classifications',320,160, 'food', false)
        ]);

        Classification::create([
            'name' => 'Panificación',
            'decription' => 'Tortas pasteles',
            'cover' => \Faker\Provider\Image::image('public/storage/classifications',320,160, 'food', false)
        ]);

        
    }
}
