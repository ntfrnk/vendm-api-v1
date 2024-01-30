<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Agro',
                'subcategories' => [
                    ['name' => 'Almacenaje'],
                    ['name' => 'Animales'],
                    ['name' => 'Apicultura'],
                    ['name' => 'Energia'],
                    ['name' => 'Fertilizantes'],
                    ['name' => 'Herramientas'],
                    ['name' => 'Infraestructura'],
                    ['name' => 'Insumos'],
                    ['name' => 'Lubricantes y Fluidos'],
                    ['name' => 'Maquinaria'],
                    ['name' => 'Producción Animal'],
                    ['name' => 'Protección de Cultivos'],
                    ['name' => 'Repuestos'],
                    ['name' => 'Riego'],
                    ['name' => 'Semillas'],
                ]
            ],
            [
                'name' => 'Alimentos y bebidas',
                'subcategories' => [
                    ['name' => 'Almacén'],
                    ['name' => 'Bebidas'],
                    ['name' => 'Comida Preparada'],
                    ['name' => 'Congelados'],
                    ['name' => 'Frescos'],
                ]
            ],
            [
                'name' => 'Animales y Mascotas',
                'subcategories' => [
                    ['name' => 'Accesorios'],
                    ['name' => 'Alimentación'],
                    ['name' => 'Hábitat'],
                    ['name' => 'Higiene'],
                    ['name' => 'Peluquería'],
                    ['name' => 'Salud'],
                ]
            ],
            [
                'name' => 'Antigüedades',
                'subcategories' => [
                    ['name' => 'Adornos'],
                    ['name' => 'Esculturas'],
                    ['name' => 'Filatelia'],
                    ['name' => 'Joyería antigua'],
                    ['name' => 'Literatura'],
                    ['name' => 'Monedas y Billetes'],
                    ['name' => 'Posters'],
                ]
            ],
            [
                'name' => 'Bebés',
                'subcategories' => [
                    ['name' => 'Andadores'],
                    ['name' => 'Alimentación y lactancia'],
                    ['name' => 'Artículos para Baño'],
                    ['name' => 'Artículos de Maternidad'],
                    ['name' => 'Chupetes y Mordillos'],
                    ['name' => 'Corralitos'],
                    ['name' => 'Habitación del Bebé'],
                    ['name' => 'Higiene y Cuidado'],
                    ['name' => 'Juegos y Juguetes'],
                    ['name' => 'Paseo'],
                    ['name' => 'Ropa y Calzado'],
                    ['name' => 'Salud'],
                    ['name' => 'Seguridad'],
                ]
            ],
            [
                'name' => 'Belleza y Cuidado Personal',
                'subcategories' => [
                    ['name' => 'Artefactos eléctricos'],
                    ['name' => 'Artículos de Peluquería'],
                    ['name' => 'Barbería'],
                    ['name' => 'Cuidado de la Piel'],
                    ['name' => 'Cuidado del Cabello'],
                    ['name' => 'Depilación'],
                    ['name' => 'Farmacia'],
                    ['name' => 'Higiene Personal'],
                    ['name' => 'Manicuría y Pedicuría'],
                    ['name' => 'Maquillaje'],
                    ['name' => 'Perfumes'],
                    ['name' => 'Tratamientos de Belleza'],
                ]
            ],
            [
                'name' => 'Camping, Caza y Pesca',
                'subcategories' => [
                    ['name' => 'Anafes y gas'],
                    ['name' => 'Armas y cuchillos de caza'],
                    ['name' => 'Articulos de campamentismo'],
                    ['name' => 'Bolsos y mochilas'],
                    ['name' => 'Cañas y reeles'],
                    ['name' => 'Carpas y gacebos'],
                    ['name' => 'Colchones y bolsas de dormir'],
                    ['name' => 'Indumentaria de outdoor'],
                    ['name' => 'Mesas y sillas'],
                    ['name' => 'Termos y conservadoras'],
                ]
            ],
            [
                'name' => 'Computación y tecnología',
                'subcategories' => [
                    ['name' => 'Almacenamiento'],
                    ['name' => 'Cables y adaptadores'],
                    ['name' => 'Componentes de PC'],
                    ['name' => 'Conectividad y Redes'],
                    ['name' => 'Estabilizadores y UPS'],
                    ['name' => 'Impresión'],
                    ['name' => 'Monitores y Accesorios'],
                    ['name' => 'Notebooks y Accesorios'],
                    ['name' => 'PC de Escritorio'],
                    ['name' => 'Proyectores y Pantallas'],
                    ['name' => 'Software'],
                    ['name' => 'Tablets y Accesorios'],
                ]
            ],
            [
                'name' => 'Construcción',
                'subcategories' => [
                    ['name' => 'Aberturas'],
                    ['name' => 'Herramientas'],
                    ['name' => 'Baños y Sanitarios'],
                    ['name' => 'Electricidad'],
                    ['name' => 'Maquinarias'],
                    ['name' => 'Materiales'],
                    ['name' => 'Pinturería'],
                    ['name' => 'Pisos y Revestimientos'],
                    ['name' => 'Plomería'],
                ]
            ],
            [
                'name' => 'Cotillón y Fiestas',
                'subcategories' => [
                    ['name' => 'Cotillón'],
                    ['name' => 'Decoración'],
                    ['name' => 'Descartables'],
                    ['name' => 'Disfraces y Cosplay'],
                    ['name' => 'Invitaciones y Tarjetas'],
                    ['name' => 'Kits Imprimibles'],
                    ['name' => 'Sets para fotos'],
                    ['name' => 'Souvenirs'],
                ]
            ],
            [
                'name' => 'Deportes y Fitness',
                'subcategories' => [
                    ['name' => 'Calzados'],
                    ['name' => 'Indumentaria'],
                    ['name' => 'Accesorios'],
                    ['name' => 'Palos y bates'],
                    ['name' => 'Pelotas'],
                    ['name' => 'Raquetas y Paletas'],
                    ['name' => 'Redes'],
                    ['name' => 'Armas deportivas'],
                    ['name' => 'Canoas, kayaks e inflables'],
                    ['name' => 'Monopatines y scooters'],
                    ['name' => 'Paintball'],
                    ['name' => 'Cronómetros y pulsómetros'],
                    ['name' => 'Suplementos'],
                ]
            ],
            [
                'name' => 'Electrodomésticos',
                'subcategories' => [
                    ['name' => 'Artículos pequeños'],
                    ['name' => 'Climatización'],
                    ['name' => 'Cocinas y Hornos'],
                    ['name' => 'Cuidado personal'],
                    ['name' => 'Heladeras y Freezers'],
                    ['name' => 'Lavado'],
                    ['name' => 'Termotanques y Calefones'],
                ]
            ],
            [
                'name' => 'Electrónica, audio y video',
                'subcategories' => [
                    ['name' => 'TV, Audio y Video'],
                    ['name' => 'Componentes de electrónica'],
                    ['name' => 'Cámaras y drones'],
                    ['name' => 'Media Streaming'],
                    ['name' => 'Pilas y Cargadores'],
                    ['name' => 'Proyectores y Pantallas'],
                ]
            ],
            [
                'name' => 'Gaming',
                'subcategories' => [
                    ['name' => 'Consolas y videojuegos'],
                    ['name' => 'Accesorios para celulares'],
                    ['name' => 'Accesorios para PC'],
                ]
            ],
            [
                'name' => 'Herramientas',
                'subcategories' => [
                    ['name' => 'Albañilería'],
                    ['name' => 'Cajas y Organizadores'],
                    ['name' => 'Carpintería'],
                    ['name' => 'Electricidad'],
                    ['name' => 'Industrial'],
                    ['name' => 'Jardinería'],
                    ['name' => 'Neumáticas'],
                    ['name' => 'Plomería'],
                    ['name' => 'Uso doméstico'],
                ]
            ],
            [
                'name' => 'Hogar y Muebles',
                'subcategories' => [
                    ['name' => 'Aparadores, alacenas y estanterías'],
                    ['name' => 'Bazar y Cocina'],
                    ['name' => 'Baños'],
                    ['name' => 'Camas, Colchones y Accesorios'],
                    ['name' => 'Decoración e interiores'],
                    ['name' => 'Iluminación'],
                    ['name' => 'Jardin y Aire Libre'],
                    ['name' => 'Lavandería'],
                    ['name' => 'Seguridad'],
                    ['name' => 'Sillas y mesas'],
                    ['name' => 'Sillones y futones'],
                ]
            ],
            [
                'name' => 'Indumentaria',
                'subcategories' => [
                    ['name' => 'Abrigos'],
                    ['name' => 'Accesorios de Moda'],
                    ['name' => 'Bermudas, calzas y shorts'],
                    ['name' => 'Blusas'],
                    ['name' => 'Bolsos y Carteras'],
                    ['name' => 'Calzado'],
                    ['name' => 'Camisas'],
                    ['name' => 'Enteritos'],
                    ['name' => 'Laboral y Escolar'],
                    ['name' => 'Pantalones'],
                    ['name' => 'Polleras'],
                    ['name' => 'Remeras, Musculosas y Chombas'],
                    ['name' => 'Ropa Deportiva'],
                    ['name' => 'Ropa Interior y de Dormir'],
                    ['name' => 'Trajes'],
                    ['name' => 'Trajes de Baño'],
                    ['name' => 'Vestidos'],
                ]
            ],
            [
                'name' => 'Industria',
                'subcategories' => [
                    ['name' => 'Embalaje y Logística'],
                    ['name' => 'Equipamiento para Comercios y Oficinas'],
                    ['name' => 'Gastronomía y Hotelería'],
                    ['name' => 'Gráfica e Impresión'],
                    ['name' => 'Herramientas Industriales'],
                    ['name' => 'Seguridad Laboral'],
                    ['name' => 'Textil y Calzado'],
                    ['name' => 'Uniformes y Ropa de Trabajo'],
                ]
            ],
            [
                'name' => 'Inmuebles',
                'subcategories' => [
                    ['name' => 'Campos'],
                    ['name' => 'Casas y Departamentos'],
                    ['name' => 'Cocheras'],
                    ['name' => 'Depósitos y Galpones'],
                    ['name' => 'Fondos de Comercio'],
                    ['name' => 'Locales, Consultorios y oficinas'],
                    ['name' => 'Quintas'],
                    ['name' => 'Terrenos y Lotes'],
                ]
            ],
            [
                'name' => 'Instrumentos Musicales',
                'subcategories' => [
                    ['name' => 'Amplificadores'],
                    ['name' => 'Baterías y Percusión'],
                    ['name' => 'Cables, fichas y conectores'],
                    ['name' => 'Consolas y potencias'],
                    ['name' => 'Equipos de DJ y Accesorios'],
                    ['name' => 'Estudio de Grabación'],
                    ['name' => 'Instrumentos de Cuerdas'],
                    ['name' => 'Instrumentos de Viento'],
                    ['name' => 'Metrónomos y afinadores'],
                    ['name' => 'Micrófonos y pies'],
                    ['name' => 'Parlantes y Bafles'],
                    ['name' => 'Teclados, Pianos y accesorios'],
                ]
            ],
            [
                'name' => 'Juguetes',
                'subcategories' => [
                    ['name' => 'Electrónicos para Niños'],
                    ['name' => 'Figuritas, Álbumes y Cromos'],
                    ['name' => 'Juegos de Agua y Playa'],
                    ['name' => 'Juegos de Mesa y Cartas'],
                    ['name' => 'Plaza y Aire Libre'],
                    ['name' => 'Juegos de Salón'],
                    ['name' => 'Juguetes Antiestrés e Ingenio'],
                    ['name' => 'Juguetes de Construcción'],
                    ['name' => 'Juguetes de Oficios'],
                    ['name' => 'Muñecos y Muñecas'],
                    ['name' => 'Patines y Patinetas'],
                    ['name' => 'Peloteros y Castillos'],
                    ['name' => 'Peluches'],
                    ['name' => 'Títeres y Marionetas'],
                    ['name' => 'Vehículos Montables para Niños'],
                    ['name' => 'Vehículos de Juguete'],
                ]
            ],
            [
                'name' => 'Librería y Mercería',
                'subcategories' => [
                    ['name' => 'Arte y Manualidades'],
                    ['name' => 'Artículos de Librería'],
                    ['name' => 'Artículos de Mercería'],
                ]
            ],
            [
                'name' => 'Libros y Revistas',
                'subcategories' => [
                    ['name' => 'Arte, Arquitectura y Diseño'],
                    ['name' => 'Autoayuda'],
                    ['name' => 'Ciencias Naturales y de la Salud'],
                    ['name' => 'Computación y Sistemas'],
                    ['name' => 'Derecho y Ciencias Sociales'],
                    ['name' => 'Divulgación Científica'],
                    ['name' => 'Enciclopedias, Diccionarios, Lingüística'],
                    ['name' => 'Espiritualidad'],
                    ['name' => 'Ficción y Literatura'],
                    ['name' => 'Gastronomía y Costumbres'],
                    ['name' => 'Humanidades'],
                    ['name' => 'Infantil y Juvenil'],
                    ['name' => 'Ingeniería, Técnica y Ciencias Exactas'],
                    ['name' => 'Mapas y Guías de Turismo'],
                    ['name' => 'Negocios y Ciencias Económicas'],
                    ['name' => 'Revistas, historietas y cómics'],
                ]
            ],
            [
                'name' => 'Música, Películas y Series',
                'subcategories' => [
                    ['name' => 'Música'],
                    ['name' => 'Peliculas'],
                    ['name' => 'Series'],
                    ['name' => 'Videos'],
                ]
            ],
            [
                'name' => 'Salud',
                'subcategories' => [
                    ['name' => 'Equipamiento Médico'],
                    ['name' => 'Movilidad'],
                    ['name' => 'Ortopedia'],
                    ['name' => 'Suplementos Alimenticios'],
                    ['name' => 'Terapias Alternativas'],
                ]
            ],
            [
                'name' => 'Servicios',
                'subcategories' => [
                    ['name' => 'Asesoramiento Contable y Legal'],
                    ['name' => 'Belleza y Cuidado Personal'],
                    ['name' => 'Comunicación y diseño'],
                    ['name' => 'Enseñanza particular'],
                    ['name' => 'Fletes y Transporte'],
                    ['name' => 'Fotografía, Música y Cine'],
                    ['name' => 'Mantenimiento de Vehículos'],
                    ['name' => 'Medicina y Salud'],
                    ['name' => 'Mensajería y cadetería'],
                    ['name' => 'Organización de Fiestas y Eventos'],
                    ['name' => 'Peluquería, barbería y maquillaje'],
                    ['name' => 'Servicios para Mascotas'],
                    ['name' => 'Servicios para Oficinas'],
                    ['name' => 'Tecnología'],
                    ['name' => 'Viajes y Turismo'],
                ]
            ],
            [
                'name' => 'Supermercado',
                'subcategories' => [
                    ['name' => 'Almacén'],
                    ['name' => 'Bebidas'],
                    ['name' => 'Carnes'],
                    ['name' => 'Comidas preparadas'],
                    ['name' => 'Congelados'],
                    ['name' => 'Embutidos'],
                    ['name' => 'Frutas y verduras'],
                    ['name' => 'Lácteos'],
                    ['name' => 'Limpieza'],
                    ['name' => 'Perfumería'],
                    ['name' => 'Panadería y repostería'],
                ]
            ],
            [
                'name' => 'Vehículos',
                'subcategories' => [
                    ['name' => 'Alineado y balanceo'],
                    ['name' => 'Compa y venta de usados'],
                    ['name' => 'Electricidad del automotor'],
                    ['name' => 'GNC'],
                    ['name' => 'Limpieza de Vehículos'],
                    ['name' => 'Lubricantes y Fluidos'],
                    ['name' => 'Mecánica general'],
                    ['name' => 'Neumáticos y llantas'],
                    ['name' => 'Repuestos y accesorios'],
                    ['name' => 'Seguridad Vehicular'],
                    ['name' => 'Tuning y preparación'],
                ]
            ],
        ];

        foreach($categories as $category) {
            $new_category = Category::create(['name' => $category['name']]);

            foreach($category['subcategories'] as $subcategory){
                $new_category->subcategories()->create([
                    'category_id' => $new_category->id,
                    'name' => $subcategory['name']
                ]);
            }
        }
    }
}
