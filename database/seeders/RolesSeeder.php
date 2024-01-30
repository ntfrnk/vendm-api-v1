<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'Master'],
            ['name' => 'Admin'],
            ['name' => 'Moderator'],
            ['name' => 'User'],
        ];

        foreach($roles as $role) {
            Role::create($role);
        }
    }
}
