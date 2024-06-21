<?php

namespace Database\Factories;

use App\Models\pedido;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Detalle_pedido>
 */
class Detalle_pedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'cantidad' => $this->faker->randomNumber(2, true),
            'precio_unitario' => $this->faker->randomFloat(2, 1, 100),
            'pedido_id'=>pedido::all()->random()->id,
        ];
    }
}
