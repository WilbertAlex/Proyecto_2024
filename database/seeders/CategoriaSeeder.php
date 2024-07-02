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
                'descripción' => $faker->sentence,
            ],
            [
                'nombre' => 'Aretes',
                'descripción' => $faker->sentence,
            ],
            [
                'nombre' => 'Pulseras',
                'descripción' => $faker->sentence,
            ],
            [
                'nombre' => 'Broches',
                'descripción' => $faker->sentence,
            ],
            [
                'nombre' => 'Relojes',
                'descripción' => $faker->sentence,
            ],
            [
                'nombre' => 'Alfileres',
                'descripción' => $faker->sentence,
            ],
            [
                'nombre' => 'Piercings',
                'descripción' => $faker->sentence,
            ],
            [
                'nombre' => 'Joyeria Corporal',
                'descripción' => $faker->sentence,
            ],
            [
                'nombre' => 'Joyeria para el cabello',
                'descripción' => $faker->sentence,
            ],
        ];

        // Insertar los datos en la tabla 'categorias'
        foreach ($categorias as $categoria) {
            DB::table('categorias')->insert($categoria);
        }


    }
}
