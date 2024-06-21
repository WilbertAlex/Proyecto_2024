<?php

namespace Database\Factories;

use App\Models\categoria;
use App\Models\cliente;
use App\Models\inventario;
use App\Models\marca;
use App\Models\proveedor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
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
            'monto_pago' => $this->faker->randomFloat(2, 10, 500),
            'stock' => $this->faker->randomDigit(50),
            'descripcion'=>$this->faker->text(50),
            'categoria_id'=>categoria::all()->random()->id,
            'marca_id'=>marca::all()->random()->id,
            'proveedor_id'=>proveedor::all()->random()->id,
            'inventario_id'=>inventario::all()->random()->id,
            'cliente_id'=>cliente::all()->random()->id,
        ];
    }
}
