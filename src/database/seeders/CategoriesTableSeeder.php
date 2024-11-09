<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            ['brand_name' => '衣類'],
            ['brand_name' => 'シューズ'],
            ['brand_name' => 'バッグ'],
            ['brand_name' => '腕時計'],
            ['brand_name' => 'アクセサリー'],
            ['brand_name' => '帽子'],
            ['brand_name' => '楽器'],
            ['brand_name' => '雑貨'],
            ['brand_name' => '本'],
            ['brand_name' => '財布/小物'],
            ['brand_name' => 'インテリア'],
            ['brand_name' => 'フレグランス'],
            ['brand_name' => 'おもちゃ'],
        ];
        DB::table('brands')->insert($params);
    }
}
