<?php

use Illuminate\Database\Seeder;
use App\Purchase;

class CreatePurchasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('purchases')->delete();

        $products = [
            [ 'id' => 1, 'user_id' => 1, 'purchase_status_id' => 1 ],
            [ 'id' => 2, 'user_id' => 1, 'purchase_status_id' => 2 ],
            [ 'id' => 3, 'user_id' => 1, 'purchase_status_id' => 2 ],
            [ 'id' => 4, 'user_id' => 1, 'purchase_status_id' => 2 ],

            [ 'id' => 5, 'user_id' => 2, 'purchase_status_id' => 1 ],
            [ 'id' => 6, 'user_id' => 2, 'purchase_status_id' => 2 ],

            [ 'id' => 7, 'user_id' => 3, 'purchase_status_id' => 2 ],

            [ 'id' => 8, 'user_id' => 4, 'purchase_status_id' => 2 ],
            [ 'id' => 9, 'user_id' => 4, 'purchase_status_id' => 2 ],
        ];

        Purchase::insert($products);
    }
}
