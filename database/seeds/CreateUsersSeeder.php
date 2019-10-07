<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $users = [
            [ 'id' => 1, 'state' => 1, 'first_name' => 'Amer', 'last_name' => 'Salgado', 'email' => 'amersb_29@gmail.com', 'password' => bcrypt('carrotz124'), 'memberships_id' => null, 'countries_id' => 1 ],
            [ 'id' => 2, 'state' => 1, 'first_name' => 'Alejandra', 'last_name' => 'González', 'email' => 'a.miramontes@iobjetiva.com', 'password' => bcrypt('carrotz124'), 'memberships_id' => 1, 'countries_id' => 1],
            [ 'id' => 3, 'state' => 1, 'first_name' => 'Yahaira', 'last_name' => 'Hernández', 'email' => 'y.hernandez@iobjetiva.com', 'password' => bcrypt('carrotz124'), 'memberships_id' => 2, 'countries_id' => 1],
            [ 'id' => 4, 'state' => 0, 'first_name' => 'Gabriela', 'last_name' => 'Velázquez', 'email' => 'g.velazquez@iobjetiva.com', 'password' => bcrypt('carrotz124'), 'memberships_id' => 2, 'countries_id' => 2],
            [ 'id' => 5, 'state' => 1, 'first_name' => 'Irany', 'last_name' => 'Salgado', 'email' => 'iranysabe@gmail.com', 'password' => bcrypt('carrotz124'), 'memberships_id' => 2, 'countries_id' => 2],
        ];

        User::insert($users);
    }
}
