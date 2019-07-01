<?php

use Illuminate\Database\Seeder;
use App\Role;

class CreateRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();

        $roles = [
            [ 'id' => 1, 'name' => 'admin',      'description' => 'Cuenta con todos los permisos'],
            [ 'id' => 2, 'name' => 'editor_sr',  'description' => 'Cuenta con permisos de Edición y Borrado' ],
            [ 'id' => 3, 'name' => 'editor',     'description' => 'Cuenta sólo con permisos de Edición' ],
            [ 'id' => 4, 'name' => 'consumidor', 'description' => 'Cuenta sólo con permisos de Lectura' ],
        ];

        Role::insert($roles);
    }
}
