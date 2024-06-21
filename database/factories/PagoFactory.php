<?php

namespace Database\Factories;

use App\Models\pedido;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pago>
 */
class PagoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'monto_pago' => $this->faker->randomFloat(2, 10, 500),
            'fecha_envio' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'metodo'=>$this->faker->text(20),
            'pedido_id'=>pedido::all()->random()->id,
        ];
    }
}
