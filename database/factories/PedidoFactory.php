<?php

namespace Database\Factories;

use App\Models\cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pedido>
 */
class PedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fecha_envio' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'name' => $this->faker->randomDigit(10),
            'estado'=>$this->faker->text(50),
            'cliente_id'=>cliente::all()->random()->id,

        ];
    }
}
