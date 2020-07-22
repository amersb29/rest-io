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
        $this->call(CreateUsersSeeder::class);
        $this->call(CreateMembershipsSeeder::class);
        $this->call(CreateCountriesSeeder::class);
        $this->call(CreateRolesSeeder::class);
        $this->call(CreateUsersRolesRelationSeeder::class);
        $this->call(CreateRolesSeeder::class);
        $this->call(CreatePermissionsSeeder::class);
        $this->call(CreateRolesPermissionsRelationSeeder::class);
        $this->call(CreatePaymentMethodsSeeder::class);
        $this->call(CreatePMUsersRelationSeeder::class);
        $this->call(CreateTipoProductosSeeder::class);
        $this->call(CreateProductsSeeder::class);
        $this->call(CreateUsersProductsRelationSeeder::class);
        $this->call(CreateVideosSeeder::class);
        $this->call(CreateNotebooksSeeder::class);

        $this->call(CreatePaymentsSeeder::class);
        $this->call(CreatePurchasesProductsRelationSeeder::class);
        $this->call(CreateSedesSeeder::class);
        $this->call(CreateBannersSeeder::class);
        $this->call(CreateSubscribersSeeder::class);
        $this->call(CreateCuponsSeeder::class);

    }
}
