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
        $this->call(CreateRolesSeeder::class);
        $this->call(CreateUsersRolesRelationSeeder::class);
        $this->call(CreateRolesSeeder::class);
        $this->call(CreatePermissionsSeeder::class);
        $this->call(CreateRolesPermissionsRelationSeeder::class);
        $this->call(CreatePaymentMethodsSeeder::class);
        $this->call(CreatePMUsersRelationSeeder::class);
        $this->call(CreateProductsSeeder::class);
        $this->call(CreateUsersProductsRelationSeeder::class);
        
    }
}
