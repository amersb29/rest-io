<?php

use Illuminate\Database\Seeder;
use App\Subscriber;

class CreateSubscribersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subscribers')->delete();

        $subscribers = [
            [ 'id' => 1, 'name' => 'Amer Salgado', 'email' => 'amersb_29@gmail.com', 'phone' => '5545545889' ],
            [ 'id' => 2, 'name' => 'Alejandra González', 'email' => 'a.miramontes@iobjetiva.com', 'phone' => '5545545889' ],
            [ 'id' => 3, 'name' => 'Yahaira Hernández', 'email' => 'y.hernandez@iobjetiva.com', 'phone' => '5545545889' ],
            [ 'id' => 4, 'name' => 'Gabriela Velázquez', 'email' => 'g.velazquez@iobjetiva.com', 'phone' => '5545545889' ],
            [ 'id' => 5, 'name' => 'Irany Salgado', 'email' => 'iranysabe@gmail.com', 'phone' => '5545545889' ],
        ];

        Subscriber::insert($subscribers);
    }
}
