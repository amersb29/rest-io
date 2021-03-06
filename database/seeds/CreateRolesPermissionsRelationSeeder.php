<?php

use Illuminate\Database\Seeder;

class CreateRolesPermissionsRelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('assigned_permissions')->delete();

        $users_roles = [
            [ 'role_id' => 1 , 'permission_id' => 1 ],
            [ 'role_id' => 1 , 'permission_id' => 2 ],
            [ 'role_id' => 1 , 'permission_id' => 3 ],
            [ 'role_id' => 1 , 'permission_id' => 4 ],

            [ 'role_id' => 2 , 'permission_id' => 2 ],
            [ 'role_id' => 2 , 'permission_id' => 3 ],
            [ 'role_id' => 2 , 'permission_id' => 4 ],

            [ 'role_id' => 3 , 'permission_id' => 2 ],
            [ 'role_id' => 3 , 'permission_id' => 3 ],

            [ 'role_id' => 4 , 'permission_id' => 2 ],
        
        ];
        
        DB::table('assigned_permissions')->insert($users_roles);
    }
}
