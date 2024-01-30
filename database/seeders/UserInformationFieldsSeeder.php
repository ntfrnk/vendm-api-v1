<?php

namespace Database\Seeders;

use App\Models\UserInformationField;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserInformationFieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user_information_fields = [
            [
                'user_id' => 1,
                'information_field_id' => 1,
                'value' => 'Franco Daniel',
            ],
            [
                'user_id' => 1,
                'information_field_id' => 2,
                'value' => 'Ocaranza',
            ],
            [
                'user_id' => 1,
                'information_field_id' => 3,
                'value' => '1985-04-12',
            ],
            [
                'user_id' => 1,
                'information_field_id' => 4,
                'value' => '31842369',
            ],
            [
                'user_id' => 1,
                'information_field_id' => 6,
                'value' => 'm',
            ],
            [
                'user_id' => 1,
                'information_field_id' => 9,
                'value' => '+5493816307673',
            ],
            [
                'user_id' => 1,
                'information_field_id' => 12,
                'value' => 'netfrank777@gmail.com',
            ]
        ];

        foreach($user_information_fields as $user_information_field) {
            UserInformationField::create($user_information_field);
        }
    }
}
