<?php

use Illuminate\Database\Seeder;
use App\Payment;

class CreatePaymentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payments')->delete();

        $products = [
            [ 'id' => 1, 'user_id' => 1, 'purchase_id' => 2, 'payment_method_id' => 4, 'total_ammount' => 2500.45  ],
            [ 'id' => 2, 'user_id' => 1, 'purchase_id' => 3, 'payment_method_id' => 4, 'total_ammount' => 2500.45  ],
            [ 'id' => 3, 'user_id' => 1, 'purchase_id' => 4, 'payment_method_id' => 5, 'total_ammount' => 2500.45  ],

            [ 'id' => 4, 'user_id' => 2, 'purchase_id' => 6, 'payment_method_id' => 6, 'total_ammount' => 2500.45  ],

            [ 'id' => 5, 'user_id' => 3, 'purchase_id' => 7, 'payment_method_id' => 1, 'total_ammount' => 2500.45  ],

            [ 'id' => 6, 'user_id' => 4, 'purchase_id' => 8, 'payment_method_id' => 4, 'total_ammount' => 2500.45  ],
            [ 'id' => 7, 'user_id' => 4, 'purchase_id' => 9, 'payment_method_id' => 7, 'total_ammount' => 2500.45  ],
         ];

        Payment::insert($products);
    }
}