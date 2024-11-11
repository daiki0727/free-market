<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Condition;

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'item_name' => $this->faker->randomElement([
                'クラシック腕時計', 
                'モダンソファ', 
                'レザーシューズ',
                'ぬいぐるみ',
                'テーラードジャケット',
                'ボストンバッグ',
                'ヴィンテージギター',
                'ブランド香水',
                '長財布',
                'ニットキャップ']),
            'description' => $this->faker->randomElement([
                'クラシックなデザインで長く愛用できる最高のアイテムです。',
                '専門家も推薦する高品質な商品です。',
                '耐久性があり、どんなスタイルにも合わせやすいです。',
                '高品質な素材を使用し、長期間の使用にも耐える耐久性があります。',
                'シンプルで洗練されたデザインが特徴。どんなスタイルにもぴったり合います。',
                '使い心地が良く、日常使いに最適なアイテムです。',
                '最新技術を駆使した、優れた機能性を誇ります。',
                '細部までこだわったデザインで、見る人を惹きつける魅力があります。',
                'どんなシーンでも活躍する万能アイテムです。',
                'お手入れが簡単で、忙しい日々でも手軽に使い続けられます。',
            ]),
            'brand_id' => Brand::inRandomOrder()->first()->id,
            'price' => $this->faker->numberBetween(1000, 50000),
            'category_id' => Category::inRandomOrder()->first()->id,
            'condition_id' => Condition::inRandomOrder()->first()->id,
            'image_url' => $this->faker->imageUrl(640, 480, 'fashion', true),
        ];
    }
}
