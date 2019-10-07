<?php

use Illuminate\Database\Seeder;

class CreatePMUsersRelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('assigned_payment_methods')->delete();

        $users_roles = [
            [ 'user_id' => 3, 'payment_method_id' => 4 ],
            [ 'user_id' => 3, 'payment_method_id' => 5 ],
            [ 'user_id' => 3, 'payment_method_id' => 6 ],

            [ 'user_id' => 5, 'payment_method_id' => 5 ],
            [ 'user_id' => 5, 'payment_method_id' => 7 ],
        ];
        
        DB::table('assigned_payment_methods')->insert($users_roles);
    }
}
