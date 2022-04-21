<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user1 = User::factory()->create([
            'name'     => 'Ahmed Hashem',
            'email'    => 'hashem@micro-codes.com',
            'password' => Hash::make('password'),
            'is_admin' => true,
        ]);
        $user1->createToken('API Token')->accessToken;

        $user2 = User::factory()->create([
            'email'    => 'user1@test.com',
            'password' => Hash::make('password'),
            'name'     => 'User 1',
            'is_admin' => false,
        ]);
        $user2->createToken('API Token')->accessToken;

        $user3 = User::factory()->create([
            'email'    => 'user2@test.com',
            'password' => Hash::make('password'),
            'name'     => 'User 2',
            'is_admin' => false,
        ]);
        $user3->createToken('API Token')->accessToken;

        $user4 = User::factory()->create([
            'email'    => 'user3@test.com',
            'password' => Hash::make('password'),
            'name'     => 'User 3',
            'is_admin' => false,
        ]);
        $user4->createToken('API Token')->accessToken;
    }
}
