<?php

namespace Database\Seeders;

use App\Models\Anillo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnilloSeeder extends Seeder
{
    public function run(): void
    {
        $anillos = [
            [
                'nombre' => 'Anillo Alba Con Zircones',
                'descripcion' => 'Un elegante anillo de plata adornado con pequeños zircones que capturan la luz desde todos los ángulos.',
                'precio' => 150.75,
                'categoria_id' => 1,
            ],
            [
                'nombre' => 'Anillo Reversible Codicia',
                'descripcion' => 'Anillo innovador que se puede usar de dos maneras distintas, con un diseño versátil que simboliza la ambición y el deseo.',
                'precio' => 1800,
                'categoria_id' => 1,
            ],
            [
                'nombre' => 'Anillo Miranda con Zircones Preciosos',
                'descripcion' => 'Este anillo destaca por su fino trabajo en plata y sus impresionantes zircones que emanan sofisticación.',
                'precio' => 450,
                'categoria_id' => 1,
            ],
            [
                'nombre' => 'Anillo Trenzado',
                'descripcion' => 'Un anillo de oro trenzado que representa la unión y la fortaleza, ideal para cualquier ocasión.',
                'precio' => 320,
                'categoria_id' => 1,
            ],
            [
                'nombre' => 'Anillo Clásico',
                'descripcion' => 'Diseño atemporal en plata esterlina, perfecto para los amantes de la simplicidad y la elegancia.',
                'precio' => 220,
                'categoria_id' => 1,
            ],
            [
                'nombre' => 'Anillo París',
                'descripcion' => 'Inspirado en la ciudad del amor, este anillo en oro blanco captura la esencia romántica con su delicado diseño.',
                'precio' => 650,
                'categoria_id' => 1,
            ],
            [
                'nombre' => 'Anillo Croix',
                'descripcion' => 'Anillo de plata con un elegante diseño en forma de cruz, simbolizando la fe y la protección.',
                'precio' => 280,
                'categoria_id' => 1,
            ],
            [
                'nombre' => 'Anillo Ámsterdam',
                'descripcion' => 'Un anillo moderno y robusto en acero inoxidable, perfecto para quienes buscan una pieza de joyería duradera.',
                'precio' => 390,
                'categoria_id' => 1,
            ],
            [
                'nombre' => 'Anillo Fino',
                'descripcion' => 'Delicado anillo de oro con un acabado pulido, ideal para añadir un toque de elegancia a cualquier atuendo.',
                'precio' => 270,
                'categoria_id' => 1,
            ],
            [
                'nombre' => 'Anillo Sahara',
                'descripcion' => 'Este anillo de plata con detalles exquisitos está inspirado en la belleza del desierto y su misterio.',
                'precio' => 350,
                'categoria_id' => 1,
            ],
        ];

        // Insertar los datos en la tabla 'anillos'
        DB::table('anillos')->insert($anillos);
    }
}
