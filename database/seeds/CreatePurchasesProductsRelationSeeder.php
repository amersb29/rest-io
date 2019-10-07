<?php

use Illuminate\Database\Seeder;

class CreatePurchasesProductsRelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('assigned_purchase_product')->delete();

        $users_roles = [
            [ 'product_id' => 1 , 'purchase_id' => 1 ],
            [ 'product_id' => 3 , 'purchase_id' => 1 ],

            [ 'product_id' => 4 , 'purchase_id' => 2 ],

            [ 'product_id' => 2 , 'purchase_id' => 3 ],
            [ 'product_id' => 3 , 'purchase_id' => 3 ],

            [ 'product_id' => 3 , 'purchase_id' => 4 ],

            [ 'product_id' => 1 , 'purchase_id' => 5 ],

            [ 'product_id' => 1 , 'purchase_id' => 6 ],

            [ 'product_id' => 2 , 'purchase_id' => 7 ],

            [ 'product_id' => 4 , 'purchase_id' => 8 ],

            [ 'product_id' => 3 , 'purchase_id' => 9 ],
        
        ];
        
        DB::table('assigned_purchase_product')->insert($users_roles);
    }
}
