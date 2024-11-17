<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            ['brand_name' => 'アディダス'],
            ['brand_name' => 'エルメス'],
            ['brand_name' => 'ナイキ'],
            ['brand_name' => 'バーバリー'],
            ['brand_name' => 'プラダ'],
            ['brand_name' => 'ポールスミス'],
            ['brand_name' => 'ユニクロ'],
            ['brand_name' => 'ラルフローレン'],
            ['brand_name' => 'ルイヴィトン'],
            ['brand_name' => 'ロレックス'],
        ];
        DB::table('brands')->insert($params);
    }
}
