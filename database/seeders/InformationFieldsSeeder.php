<?php

namespace Database\Seeders;

use App\Models\InformationField;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InformationFieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $information_fields = [
            [
                'name' => 'Nombre',
                'label' => 'name',
            ],
            [
                'name' => 'Apellido',
                'label' => 'lastname',
            ],
            [
                'name' => 'Fecha de nacimiento',
                'label' => 'birthday',
            ],
            [
                'name' => 'DNI',
                'label' => 'dni',
            ],
            [
                'name' => 'CUIL',
                'label' => 'cuil',
            ],
            [
                'name' => 'Género',
                'label' => 'gender',
            ],
            [
                'name' => 'Foto de perfil',
                'label' => 'profile_picture',
            ],
            [
                'name' => 'Foto de perfil (versión)',
                'label' => 'profile_picture_version',
            ],
            [
                'name' => 'Teléfono',
                'label' => 'phone',
            ],
            [
                'name' => 'Teléfono secundario',
                'label' => 'phone_alt',
            ],
            [
                'name' => 'Whatsapp',
                'label' => 'whatsapp',
            ],
            [
                'name' => 'Correo electrónico',
                'label' => 'email',
            ],
            [
                'name' => 'Correo electrónico secundario',
                'label' => 'email_alt',
            ],
            [
                'name' => 'Newsletter',
                'label' => 'newsletter',
            ],
            [
                'name' => 'Link',
                'label' => 'link',
            ],
            [
                'name' => 'Link secundario',
                'label' => 'link_alt',
            ],
            [
                'name' => 'Facebook',
                'label' => 'facebook',
            ],
            [
                'name' => 'Instagram',
                'label' => 'instagram',
            ],
            [
                'name' => 'Twitter',
                'label' => 'twitter',
            ],
            [
                'name' => 'X',
                'label' => 'x',
            ],
            [
                'name' => 'Threads',
                'label' => 'threads',
            ],
            [
                'name' => 'YouTube',
                'label' => 'youtube',
            ],
            [
                'name' => 'Pinterest',
                'label' => 'pinterest',
            ],
            [
                'name' => 'Sitio web',
                'label' => 'website',
            ],
            [
                'name' => 'Mapa de ubicación',
                'label' => 'location_map',
            ],

            //

            [
                'name' => 'Inscripto en AFIP',
                'label' => 'tax_inscription',
            ],
            [
                'name' => 'Categoría AFIP',
                'label' => 'iva_condition',
            ],
            [
                'name' => 'CUIT',
                'label' => 'cuit',
            ],
            [
                'name' => 'Nombre de fantasía',
                'label' => 'trade_name',
            ],
        ];

        foreach($information_fields as $information_field) {
            InformationField::create($information_field);
        }
    }
}
