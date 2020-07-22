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
            [ 'id' => 1, 'tipo_producto_id' => 6, 'courses' => 1, 'conferences' => 1, 'created_at' => date('Y-m-d H:i:s'),],
            [ 'id' => 2, 'tipo_producto_id' => 7, 'courses' => 1, 'conferences' => 2, 'created_at' => date('Y-m-d H:i:s'),],
        ];

        Membership::insert($memberships);
    }
}
