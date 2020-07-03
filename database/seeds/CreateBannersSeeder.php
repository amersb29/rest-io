<?php

use Illuminate\Database\Seeder;
use App\Banner;

class CreateBannersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->delete();

        $banners = [
            [ 'id' => 1, 'sede_id' => 1, 'description' => '', 'image'=> 'banner1.jpg', 'status' => true , 'created_at' => date('Y-m-d H:i:s'),],
            [ 'id' => 2, 'sede_id' => 1, 'description' => '', 'image'=> 'banner2.jpg', 'status' => true , 'created_at' => date('Y-m-d H:i:s'),],
            [ 'id' => 3, 'sede_id' => 2, 'description' => '', 'image'=> 'banner1.jpg', 'status' => true , 'created_at' => date('Y-m-d H:i:s'),],
            [ 'id' => 4, 'sede_id' => 2, 'description' => '', 'image'=> 'banner2.jpg', 'status' => true , 'created_at' => date('Y-m-d H:i:s'),],
            [ 'id' => 5, 'sede_id' => 2, 'description' => '', 'image'=> 'banner3.jpg', 'status' => true , 'created_at' => date('Y-m-d H:i:s'),],
            [ 'id' => 6, 'sede_id' => 3, 'description' => '', 'image'=> 'banner1.jpg', 'status' => true , 'created_at' => date('Y-m-d H:i:s'),],
            [ 'id' => 7, 'sede_id' => 3, 'description' => '', 'image'=> 'banner2.jpg', 'status' => true , 'created_at' => date('Y-m-d H:i:s'),],
            [ 'id' => 8, 'sede_id' => 4, 'description' => '', 'image'=> 'banner1.jpg', 'status' => true , 'created_at' => date('Y-m-d H:i:s'),],
            [ 'id' => 9, 'sede_id' => 4, 'description' => '', 'image'=> 'banner2.jpg', 'status' => true , 'created_at' => date('Y-m-d H:i:s'),],
            [ 'id' => 10, 'sede_id' => 4, 'description' => '', 'image'=> 'banner3.jpg', 'status' => true , 'created_at' => date('Y-m-d H:i:s'),],
        ];

        Banner::insert($banners);
    }
}
