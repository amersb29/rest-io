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
            [ 'user_id' => 3, 'product_id' => 1, 'type' => 1, 'valid_until' => date('Y-m-d H:i:s', strtotime('+2 months')) ],
            [ 'user_id' => 3, 'product_id' => 2, 'type' => 1, 'valid_until' => date('Y-m-d H:i:s', strtotime('+2 months')) ],
            [ 'user_id' => 3, 'product_id' => 4, 'type' => 1, 'valid_until' => date('Y-m-d H:i:s', strtotime('+2 months')) ],

            [ 'user_id' => 5, 'product_id' => 1, 'type' => 1, 'valid_until' => date('Y-m-d H:i:s', strtotime('+2 months')) ],
            [ 'user_id' => 5, 'product_id' => 2, 'type' => 1, 'valid_until' => date('Y-m-d H:i:s', strtotime('+2 months')) ],
            [ 'user_id' => 5, 'product_id' => 3, 'type' => 1, 'valid_until' => date('Y-m-d H:i:s', strtotime('+2 months')) ],
        ];
        
        DB::table('assigned_products')->insert($users_roles);
    }
}
