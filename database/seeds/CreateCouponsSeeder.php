<?php

use Illuminate\Database\Seeder;
use App\Coupon;

class CreateCouponsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coupons')->delete();

        $coupons = [
            [ 'id' => 1, 'user_id' => 1, 'code' => 'A6b0c3DeF22hilg', ],
            [ 'id' => 2, 'user_id' => 2, 'code' => 'A6b0c3DeF22hilg', ],
            [ 'id' => 3, 'user_id' => 3, 'code' => 'A6b0c3DeF22hilg', ],
            [ 'id' => 4, 'user_id' => 4, 'code' => 'A6b0c3DeF22hilg', ],
        ];

        Coupon::insert($coupons);
    }
}