<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            ['condition_name' => '新品/未使用'],
            ['condition_name' => '未使用に近い'],
            ['condition_name' => '目立った傷や汚れなし'],
            ['condition_name' => 'やや傷や汚れあり'],
            ['condition_name' => '傷や汚れあり'],
        ];
        DB::table('conditions')->insert($params);
    }
}
