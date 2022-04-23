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

        for ($i = 1; $i <= 15; $i++) {
            User::factory()->create([
                'email'    => "user$i@test.com",
                'password' => Hash::make('password'),
                'name'     => "User $i",
                'is_admin' => false,
            ]);
        }
    }
}
