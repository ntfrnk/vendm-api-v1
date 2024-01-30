<?php

namespace Database\Seeders;

use App\Models\StoreInformationField;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoreInformationFieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $store_information_fields = [
            [
                'store_id' => 1,
                'information_field_id' => 9,
                'value' => '+5493816307673',
                'status' => 1
            ],
            [
                'store_id' => 1,
                'information_field_id' => 11,
                'value' => 'yes',
                'status' => 1
            ],
            [
                'store_id' => 1,
                'information_field_id' => 12,
                'value' => 'netfrank777@gmail.com',
                'status' => 1
            ],
            [
                'store_id' => 1,
                'information_field_id' => 17,
                'value' => 'ntfrnk',
                'status' => 1
            ],
            [
                'store_id' => 1,
                'information_field_id' => 18,
                'value' => 'ntfrnk',
                'status' => 1
            ],
            [
                'store_id' => 1,
                'information_field_id' => 24,
                'value' => 'https://www.frankoca.com.ar/',
                'status' => 1
            ],
        ];

        foreach($store_information_fields as $store_information_field){
            StoreInformationField::create($store_information_field);
        }
    }
}
