<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Bebidas',
            
            'photo' => \Faker\Provider\Image::image('public/storage/categories',400,300, 'food', false),
            'status' => '2',
            'client_id'=>'1',
        ]);

        Category::create([
            'name' => 'Cafeterias',
            'photo' => \Faker\Provider\Image::image('public/storage/categories',400,300, 'food', false),
            'status' => '2',
            'client_id'=>'1',
        ]);

        Category::create([
            'name' => 'Platos',
            'photo' => \Faker\Provider\Image::image('public/storage/categories',400,300, 'food', false),
            'status' => '2',
            'client_id'=>'1',
        ]);

        Category::create([
            'name' => 'Postres',
            'photo' =>\Faker\Provider\Image::image('public/storage/categories',400,300, 'food', false),
            'status' => '2',
            'client_id'=>'1',
        ]);

    }
}
