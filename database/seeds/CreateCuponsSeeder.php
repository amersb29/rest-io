<?php
use App\Coupon;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CreateCuponsSeeder extends Seeder
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
            [ 'id' => 1, 'code' => 'BLACKFRIDAY', 'discount' => 1000, 'expiration' => Carbon::create('2020', '09', '01')],
            [ 'id' => 2, 'code' => 'HOTSALE', 'discount' => 400, 'expiration' => Carbon::create('2020', '09', '01')],
            [ 'id' => 3, 'code' => 'PREMIUM', 'discount' => 1249, 'expiration' => Carbon::create('2020', '09', '01')],
            [ 'id' => 4, 'code' => 'PLATINUM', 'discount' => 2499, 'expiration' => Carbon::create('2020', '09', '01')],
         
        ];

        Coupon::insert($coupons);
    }
}
