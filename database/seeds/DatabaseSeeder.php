<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(GeneroTableSeeder::class);
        $this->call(TipoDeviceTableSeeder::class);
        $this->call(ClassificationTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PackageTableSeeder::class);

        $this->call(TypeSaleTableSeeder::class);
        $this->call(PaymentMethodTableSeeder::class);
        $this->call(BookingStateTableSeeder::class);
        $this->call(SaleStateTableSeeder::class);

        $this->call(ConfigurationTableSeeder::class);
        $this->call(ServiceTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(FranchiseTableSeeder::class);
        $this->call(ClientsTableSeeder::class);
        
        $this->call(CategoryTableSeeder::class);
        $this->call(CouponTableSeeder::class);
        $this->call(GiftTableSeeder::class);
        $this->call(IngredientsTableSeeder::class);
        $this->call(MenusTableSeeder::class);

        $this->call(MenuIngredientTableSeeder::class);
        $this->call(MenusPhotoTableSeeder::class);
        $this->call(SectorTableSeeder::class);
        $this->call(MesaTableSeeder::class);
        $this->call(MozosTableSeeder::class);


        //$this->call(OrderTableSeeder::class);
        //$this->call(PaymentTableSeeder::class);
        //$this->call(PermissionTableSeeder::class);
 
        $this->call(SalsasTableSeeder::class);
        $this->call(ClientConfigurationTableSeeder::class);
        $this->call(ClientHorarioTableSeeder::class);
        $this->call(ClientPhotoTableSeeder::class);
        $this->call(UserClientPointTableSeeder::class);
        $this->call(BookingTableSeeder::class);

        $this->call(ClientPoliticaTableSeeder::class);
        $this->call(ClientServiceTableSeeder::class);
        $this->call(CommentTableSeeder::class);
        $this->call(StateBuyedTableSeeder::class);
        
    }
}
