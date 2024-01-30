<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Store;

class StoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stores = [
            [
                'name' => 'Nanotech',
                'slug' => 'nanotech-services',
                'description' => 'Nanotecnología al servicio de las cosas.',
                'logo' => '',
                'header' => '',
                'status' => 1,
            ]
        ];

        foreach($stores as $store) {
            $store = Store::create($store);
            $store->users()->attach(1, ['store_role_id' => 1]);
        }
    }
}
