<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class ConditionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            ['brand_name' => '新品/未使用'],
            ['brand_name' => '未使用に近い'],
            ['brand_name' => '目立った傷や汚れなし'],
            ['brand_name' => 'やや傷や汚れあり'],
            ['brand_name' => '傷や汚れあり'],
        ];
        DB::table('brands')->insert($params);
    }
}
