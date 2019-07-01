<?php

use Illuminate\Database\Seeder;

class CreateUsersProductsRelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('assigned_products')->delete();
        
        $users_roles = [
            [ 'user_id' => 3, 'product_id' => 1 ],
            [ 'user_id' => 3, 'product_id' => 2 ],
            [ 'user_id' => 3, 'product_id' => 4 ],

            [ 'user_id' => 5, 'product_id' => 1 ],
            [ 'user_id' => 5, 'product_id' => 2 ],
            [ 'user_id' => 5, 'product_id' => 3 ],
        ];
        
        DB::table('assigned_products')->insert($users_roles);
    }
}
