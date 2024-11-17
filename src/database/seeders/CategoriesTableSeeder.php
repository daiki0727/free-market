<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            ['category_name' => '衣類'],
            ['category_name' => 'シューズ'],
            ['category_name' => 'バッグ'],
            ['category_name' => '腕時計'],
            ['category_name' => 'アクセサリー'],
            ['category_name' => '帽子'],
            ['category_name' => '楽器'],
            ['category_name' => '雑貨'],
            ['category_name' => '本'],
            ['category_name' => '財布/小物'],
            ['category_name' => 'インテリア'],
            ['category_name' => 'フレグランス'],
            ['category_name' => 'おもちゃ'],
        ];
        DB::table('categories')->insert($params);
    }
}
