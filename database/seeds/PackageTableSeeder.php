<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Package; 
class PackageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Package::create([
            'name' => 'Platinum',
            'price' => '2000',
            'promo' => '1800',
            'status' => '1'
        ]);

        Package::create([
            'name' => 'ORO',
            'price' => '1800',
            'promo' => '1650',
            'status' => '1'
        ]);

        Package::create([
            'name' => 'Plata',
            'price' => '1500',
            'promo' => '1300',
            'status' => '1'
        ]);
    }
}
