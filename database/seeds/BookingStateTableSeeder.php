<?php

use Illuminate\Database\Seeder;
use App\BookingState;

class BookingStateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookingState::create([
            'name' => 'reservado'
        ]);
        BookingState::create([
            'name' => 'en desarrollo'
        ]);
        BookingState::create([
            'name' => 'terminado'
        ]);
        BookingState::create([
            'name' => 'cancelado'
        ]);
    }
}
