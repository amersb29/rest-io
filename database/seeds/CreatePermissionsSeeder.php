<?php

use Illuminate\Database\Seeder;
use App\Permission;

class CreatePermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->delete();

        $permissions = [
            [ 'id' => 1, 'name' => 'Create', 'description' => 'Permisos para la Creación de registros'],
            [ 'id' => 2, 'name' => 'Read',   'description' => 'Permisos para la Lectura de registros' ],
            [ 'id' => 3, 'name' => 'Update', 'description' => 'Permisos para la Actualización de registros' ],
            [ 'id' => 4, 'name' => 'Delete', 'description' => 'Permisos para el Borrado de registros' ],
        ];

        Permission::insert($permissions);
    }
}
