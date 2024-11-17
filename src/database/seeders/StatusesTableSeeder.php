<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusesTableSeeder extends Seeder
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
        DB::table('statuses')->insert($params);
    }
}
