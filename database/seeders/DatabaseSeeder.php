<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ProvincesSeeder::class,
            CategoriesSeeder::class,
            InformationFieldsSeeder::class,
            RolesSeeder::class,
            StoreRolesSeeder::class,
            UsersSeeder::class,
            UserInformationFieldsSeeder::class,
            StoresSeeder::class,
            StoreInformationFieldsSeeder::class,
            StoreBranchOfficesSeeder::class,
        ]);
    }
}
