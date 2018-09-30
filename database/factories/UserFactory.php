<?php

use Faker\Generator as Faker;
use App\Role;
use App\User;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'role_id'=>$faker->randomElement([Role::PERSONAL]),
        'name' => $faker->name,
        'lastname' => $faker->lastname,
        'email' => $faker->unique()->safeEmail,
        'telefono' => $faker->tollFreePhoneNumber,
        'sexo'=> $faker->randomElement([User::MASCULINO, User::FEMENINO]),
        'edad' => $faker->numberBetween(18,80),
        'foto'=> $faker->image('public/storage/images',400,300, null, false),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10)
       
    ];
});
