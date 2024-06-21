<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proveedor>
 */
class ProveedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=>$this->faker->text(50),
            'contacto' => $this->faker->randomFloat(2, 10, 500),
            'telefono' => '9' . $this->faker->numberBetween(10000000, 99999999),
            'correo'=>$this->faker->text(50),
            'direccion'=>$this->faker->text(50)


        ];
    }
}
