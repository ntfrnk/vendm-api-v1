<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'email' => 'netfrank777@gmail.com',
                'password' => '654321**',
                'role_id' => 1
            ]
        ];

        foreach($users as $user) {
            User::create($user);
        }
    }
}
