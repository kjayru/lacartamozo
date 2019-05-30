<?php

use Illuminate\Database\Seeder;
use App\TipoDevice;

class TipoDeviceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoDevice::create([
            'name' => 'android'
        ]);
        TipoDevice::create([
            'name' => 'iphone'
        ]);
    }
}
