<?php

namespace Database\Seeders;

use App\Models\StoreBranchOffice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoreBranchOfficesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $branch_offices = [
            [
                'store_id' => 1,
                'name' => 'Zona Norte',
                'description' => 'Esta es una descripción',
                'status' => 1,
                'ordering' => 0
            ],
            [
                'store_id' => 1,
                'name' => 'Zona Sur',
                'description' => 'Esta es una descripción',
                'status' => 1,
                'ordering' => 1
            ]
        ];

        foreach($branch_offices as $key => $branch_office){
            $new_branch_office = StoreBranchOffice::create($branch_office);
            if($key !== 0){
                $new_branch_office->address()->create([
                    'province_id' => 7,
                    'city_id' => 898,
                    'addressable_id' => $new_branch_office->id,
                    'addressable_type' => 'App\Models\StoreBranchOffice',
                    'name' => $new_branch_office->name,
                    'address' => 'Libertad 255',
                    'postal_code' => '4000',
                    'ordering' => 0,
                    'status' => 1,
                ]);
            }
        }
    }
}
