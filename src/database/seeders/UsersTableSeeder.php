<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'user_name' => 'admin user',
            'email' => 'admin@mail.com',
            'password' => Hash::make('admin123'),
            'role' => '管理者',
            'profile_id' => 1,
        ]);

        User::create([
            'user_name' => '山田太郎',
            'email' => 'yamada@mail.com',
            'password' => Hash::make('yamada123'),
            'role' => '利用者',
            'profile_id' => 2,
        ]);

        User::factory()->count(100)->create();
    }
}
