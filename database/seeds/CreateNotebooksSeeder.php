<?php

use Illuminate\Database\Seeder;
use App\Notebook;

class CreateNotebooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notebooks')->delete();

        $notebooks = [
            [ 'id' => 1, 'product_id' => 1, 'name' => 'Mentes_toxicas.doc', ],
            [ 'id' => 2, 'product_id' => 2, 'name' => 'La_insatisfaccion_del_pasado.doc', ],
            [ 'id' => 3, 'product_id' => 3, 'name' => 'Química_cerebral.doc', ],
            [ 'id' => 4, 'product_id' => 4, 'name' => 'Trastornos_de_vinculacion.doc', ],
        ];

        Notebook::insert($notebooks);
    }
}