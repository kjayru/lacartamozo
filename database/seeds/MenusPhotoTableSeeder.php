<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Menu;
use App\MenuPhoto;

class MenusPhotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = Menu::all();
        $faker = Faker::create(); 

        foreach($menus as $menu){  
            MenuPhoto::create([
                'photo' => \Faker\Provider\Image::image('public/storage/menus',300,200, 'food', false),
                'menu_id' =>  $menu->id,
            ]);
        } 
    }
}
