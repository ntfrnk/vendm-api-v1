<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Schema;

class ProvincesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_provinces = Http::get('https://infra.datos.gob.ar/georef/provincias.json')->json();
        $provinces = collect($data_provinces['provincias'])->map(function($data) {
            return [
                'id' => $data['id'],
                'name' => $data['nombre'],
            ];
        });

        $data_cities_all = Http::get('https://infra.datos.gob.ar/georef/localidades.json')->json();
        $cities_all = $data_cities_all['localidades'];

        foreach($provinces as $province) {
            $p = Province::create(['name' => $province['name']]);
            $cities = collect($cities_all)->where('provincia.id', $province['id'])->map(function($data) use ($p) {
                return [
                    'province_id' => $p->id,
                    'name' => $data['nombre'],
                ];
            })->toArray();

            $cities = array_map(
                'json_decode',
                array_unique(array_map('json_encode', $cities))
            );

            foreach($cities as $city) {
                City::create((Array) $city);
            }
        }
    }
}
