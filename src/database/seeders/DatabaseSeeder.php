<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ProfilesTableSeeder::class,
            UsersTableSeeder::class,
            BrandsTableSeeder::class,
            CategoriesTableSeeder::class,
            ConditionsTableSeeder::class,
            ColorsTableSeeder::class,
            ItemsTableSeeder::class,
            StatusesTableSeeder::class,
            PaymentMethodTableSeeder::class,
            TransactionsTableSeeder::class,
            CommentsTableSeeder::class,
        ]);
    }
}
