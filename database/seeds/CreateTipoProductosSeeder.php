<?php

use Illuminate\Database\Seeder;
use App\TipoProducto;

class CreateTipoProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_productos')->delete();

        $videos = [
            [ 'id' => 1, 'description' => 'Cursos en línea', ],
            [ 'id' => 2, 'description' => 'Conferencias en línea', ],
            [ 'id' => 3, 'description' => 'Documentales', ],
            [ 'id' => 4, 'description' => 'Sesión de Preguntas y Respuestas', ],
            [ 'id' => 5, 'description' => 'Taller de Introspección', ],
        ];

        TipoProducto::insert($videos);
    }
}
