<?php

namespace Database\Seeders;

use App\Models\StoreRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoreRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $store_roles = [
            [
				'name' => 'Dueño',
				'label' => 'owner',
				'status' => 1,
			],
			[
				'name' => 'Colaborador',
				'label' => 'collaborator',
				'status' => 1,
			],
        ];

        foreach($store_roles as $store_role) {
            StoreRole::create($store_role);
        }
    }
}
