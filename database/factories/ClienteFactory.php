<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=>$this->faker->text(20),
            'telefono' => '9' . $this->faker->numberBetween(10000000, 99999999),
            'correo' => $this->faker->userName . '@tu-dominio.com',
            'direccion'=>$this->faker->text(20)

        ];
    }
}
