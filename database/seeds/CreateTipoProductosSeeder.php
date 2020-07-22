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
            [ 'id' => 1, 'price' => 2499, 'description' => 'Cursos en línea', ],
            [ 'id' => 2, 'price' => 699, 'description' => 'Conferencias en línea', ],
            [ 'id' => 3, 'price' => 800, 'description' => 'Documentales', ],
            [ 'id' => 4, 'price' => 0, 'description' => 'Sesión de Preguntas y Respuestas', ],
            [ 'id' => 5, 'price' => 0, 'description' => 'Taller de Introspección', ],
            [ 'id' => 6, 'price' => 1249, 'description' => 'Membresía Premium', ],
            [ 'id' => 7, 'price' => 2499, 'description' => 'Membresía Platinum', ],
        ];

        TipoProducto::insert($videos);
    }
}
