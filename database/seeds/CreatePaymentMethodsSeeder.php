<?php

use Illuminate\Database\Seeder;
use App\PaymentMethod;

class CreatePaymentMethodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_methods')->delete();

        $roles = [
            [ 'id' => 1, 'name' => 'Efectivo',           'description' => 'Efectivo'],
            [ 'id' => 2, 'name' => 'Depósito',           'description' => 'Depósito bancario' ],
            [ 'id' => 3, 'name' => 'Depósito Oxxo',      'description' => 'Depósito en tiendas Oxxo' ],
            [ 'id' => 4, 'name' => 'Tarjeta de Débito',  'description' => 'TDB Bancaria' ],
            [ 'id' => 5, 'name' => 'Tarjeta de Crédito', 'description' => 'TDC Bancaria' ],
            [ 'id' => 6, 'name' => 'Paypal',             'description' => 'Plataforma de pagos online' ],
            [ 'id' => 7, 'name' => 'OpenPay',            'description' => 'Plataforma de pagos online' ],
            
        ];

        PaymentMethod::insert($roles);
    }
}
