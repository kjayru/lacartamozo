<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class PackageDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        $detailQuantity = 50;
        factory(App\PackageDetail::class, $detailQuantity)->create();
    }
}
