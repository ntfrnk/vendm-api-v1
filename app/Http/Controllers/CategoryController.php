<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return response()->json([
            'code' => 200,
            'status' => 'success',
            'data' => [
                [
                    'name' => 'Oficina',
                    'slug' => 'oficina'
                ],
                [
                    'name' => 'Vehículos',
                    'slug' => 'vehiculos'
                ],
                [
                    'name' => 'Belleza',
                    'slug' => 'belleza'
                ],
                [
                    'name' => 'Inmuebles',
                    'slug' => 'inmuebles'
                ],
                [
                    'name' => 'Hogar y Muebles',
                    'slug' => 'hogar-y-muebles'
                ],
                [
                    'name' => 'Herramientas',
                    'slug' => 'herramientas'
                ],
                [
                    'name' => 'Supermercado',
                    'slug' => 'supermercado'
                ],
                [
                    'name' => 'Construcción',
                    'slug' => 'construccion'
                ],
                [
                    'name' => 'Servicios',
                    'slug' => 'servicios'
                ],
                [
                    'name' => 'Tecnología',
                    'slug' => 'tecnologia'
                ],
                [
                    'name' => 'Deportes y Fitness',
                    'slug' => 'deportes-y-fitness'
                ],
                [
                    'name' => 'Agro',
                    'slug' => 'agro'
                ],
                [
                    'name' => 'Salud',
                    'slug' => 'salud'
                ],
                [
                    'name' => 'Electrodomésticos',
                    'slug' => 'electrodomesticos'
                ],
                [
                    'name' => 'Bebés',
                    'slug' => 'bebes'
                ],
                [
                    'name' => 'Industria',
                    'slug' => 'industria'
                ],
                [
                    'name' => 'Gaming',
                    'slug' => 'gaming'
                ],
                [
                    'name' => 'Moda',
                    'slug' => 'moda'
                ],
                [
                    'name' => 'Juguetes',
                    'slug' => 'juguetes'
                ],
            ]
        ], 200);
    }
}
