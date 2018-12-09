<?php
use Illuminate\Support\Facades\DB; 
use Illuminate\Database\Seeder;

class PersonalDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        $Quantity = 300;
        factory(App\PersonalDetail::class, $Quantity)->create();
    }
}
