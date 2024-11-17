<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentMethodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            ['payment_method' => 'クレジットカード'],
            ['payment_method' => 'コンビニ'],
            ['payment_method' => '銀行振込'],
        ];
        DB::table('payment_methods')->insert($params);
    }
}
