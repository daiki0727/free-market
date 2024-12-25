<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            ['color_name' => 'レッド'],
            ['color_name' => 'ブルー'],
            ['color_name' => 'グリーン'],
            ['color_name' => 'イエロー'],
            ['color_name' => 'オレンジ'],
            ['color_name' => 'パープル'],
            ['color_name' => 'ピンク'],
            ['color_name' => 'ブラウン'],
            ['color_name' => 'グレー'],
            ['color_name' => 'ブラック'],
            ['color_name' => 'ホワイト'],
            ['color_name' => 'ライトブルー'],
        ];
        DB::table('colors')->insert($params);
    }
}
