<?php

use Illuminate\Database\Seeder;
use App\Video;

class CreateVideosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->delete();

        $videos = [
            [ 'id' => 1, 'product_id' => 1, 'name' => 'Mentes tóxicas - Preview', 'vimeo_id' => '344215212', 'is_preview' => 1],
            [ 'id' => 2, 'product_id' => 1, 'name' => 'Mentes tóxicas 1', 'vimeo_id' => '344215213', 'is_preview' => 0],
            [ 'id' => 3, 'product_id' => 1, 'name' => 'Mentes tóxicas 2', 'vimeo_id' => '344215214', 'is_preview' => 0],
            [ 'id' => 4, 'product_id' => 1, 'name' => 'Mentes tóxicas 3', 'vimeo_id' => '344215215', 'is_preview' => 0],

            [ 'id' => 5, 'product_id' => 2, 'name' => 'La insatisfacción del pasado - Preview', 'vimeo_id' => '344214853', 'is_preview' => 1],
            [ 'id' => 6, 'product_id' => 2, 'name' => 'La insatisfacción del pasado 1', 'vimeo_id' => '344214854', 'is_preview' => 0],
            [ 'id' => 7, 'product_id' => 2, 'name' => 'La insatisfacción del pasado 2', 'vimeo_id' => '344214855', 'is_preview' => 0],

            [ 'id' => 8, 'product_id' => 3, 'name' => 'Química cerebral - Preview', 'vimeo_id' => '338763556', 'is_preview' => 1],
            [ 'id' => 9, 'product_id' => 3, 'name' => 'Química cerebral 1', 'vimeo_id' => '338763557', 'is_preview' => 0],
            [ 'id' => 10, 'product_id' => 3, 'name' => 'Química cerebral 2', 'vimeo_id' => '338763558', 'is_preview' => 0],
         
        ];

        Video::insert($videos);
    }
}
