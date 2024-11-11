<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class TransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            ['status' => '未処理'],
            ['status' => '支払済'],
            ['status' => '発送済'],
            ['status' => '取引完了'],
            ['status' => 'キャンセル'],
            ['status' => '返金済'],
        ];
        DB::table('brands')->insert($params);

        $params = [
            ['payment_method' => 'クレジットカード'],
            ['payment_method' => 'コンビニ'],
            ['payment_method' => '銀行振込'],
        ];
        DB::table('brands')->insert($params);
    }
}
