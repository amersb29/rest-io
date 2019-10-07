<?php

use Illuminate\Database\Seeder;
use App\Membership;

class CreateMembershipsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('memberships')->delete();

        $memberships = [
            [ 'id' => 1, 'name' => 'Premium', 'price' => 1249.00 , 'created_at' => date('Y-m-d H:i:s'),],
            [ 'id' => 2, 'name' => 'Platinum', 'price' => 2499.00 , 'created_at' => date('Y-m-d H:i:s'),],
        ];

        Membership::insert($memberships);
    }
}
