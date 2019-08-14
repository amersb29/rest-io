<?php

use Illuminate\Database\Seeder;
use App\Country;

class CreateCountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->delete();

        $memberships = [
            [ 'id' => 1, 'name' => 'México', 'code' => 'MX' , 'created_at' => date('Y-m-d H:i:s'),],
            [ 'id' => 2, 'name' => 'Estados Unidos', 'code' => 'USA' , 'created_at' => date('Y-m-d H:i:s'),],
        ];

        Country::insert($countries);
    }
}
