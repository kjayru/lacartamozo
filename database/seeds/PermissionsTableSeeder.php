<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'Navegar usuarios',
            'slug' => 'users.index',
            'description' => 'Lista y navega usuarios',
        ]);

        Permission::create([
            'name' => 'ver detalle',
            'slug' => 'users.show',
            'description' => 'ver detalle usuarios',
        ]);

        Permission::create([
            'name' => 'Edicion usuarios',
            'slug' => 'users.edit',
            'description' => 'editar detalle usuarios',
        ]);

        Permission::create([
            'name' => 'Eliminar usuarios',
            'slug' => 'users.destroy',
            'description' => 'Elimnar usuarios',
        ]);


        //Roles
        Permission::create([
            'name' => 'Navegar rol',
            'slug' => 'roles.index',
            'description' => 'Lista y navega rol',
        ]);

        Permission::create([
            'name' => 'ver detalle rol',
            'slug' => 'roles.show',
            'description' => 'ver detalle rol',
        ]);

        Permission::create([
            'name' => 'crear  rol',
            'slug' => 'roles.create',
            'description' => 'ver detalle rol',
        ]);

        Permission::create([
            'name' => 'Edicion rol',
            'slug' => 'roles.edit',
            'description' => 'editar detalle rol',
        ]);

        Permission::create([
            'name' => 'Eliminar rol',
            'slug' => 'roles.destroy',
            'description' => 'Elimnar rol',
        ]);
    }
}
