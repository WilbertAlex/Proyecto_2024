<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $categorias = [
            [
                'nombre' => 'Anillos',
                'descripcion' => $faker->sentence,
            ],
            [
                'nombre' => 'Aretes',
                'descripcion' => $faker->sentence,
            ],
            [
                'nombre' => 'Pulseras',
                'descripcion' => $faker->sentence,
            ],
            [
                'nombre' => 'Broches',
                'descripcion' => $faker->sentence,
            ],
            [
                'nombre' => 'Relojes',
                'descripcion' => $faker->sentence,
            ],
            [
                'nombre' => 'Alfileres',
                'descripcion' => $faker->sentence,
            ],
            [
                'nombre' => 'Piercings',
                'descripcion' => $faker->sentence,
            ],
            [
                'nombre' => 'Joyeria Corporal',
                'descripcion' => $faker->sentence,
            ],
            [
                'nombre' => 'Joyeria para el cabello',
                'descripcion' => $faker->sentence,
            ],
        ];

        // Insertar los datos en la tabla 'categorias'
        foreach ($categorias as $categoria) {
            DB::table('categorias')->insert($categoria);
        }


    }
}
