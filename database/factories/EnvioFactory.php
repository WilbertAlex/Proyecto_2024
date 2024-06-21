<?php

namespace Database\Factories;

use App\Models\cliente;
use App\Models\pedido;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Envio>
 */
class EnvioFactory extends Factory
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
            'metodo'=>$this->faker->text(20),
            'direccion'=>$this->faker->text(50),
            'cantidad' => $this->faker->randomNumber(2, true),
            'pedido_id'=>pedido::all()->random()->id,
            'cliente_id'=>cliente::all()->random()->id,
         ];
    }
}
