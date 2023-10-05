<?php

namespace Database\Factories;

use App\Models\Articulo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetalleIngreso>
 */
class DetalleIngresoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'idarticulo' => function () {
                return Articulo::inRandomOrder()->value('idarticulo');
            },
            'precio_compra' => $this->faker->randomFloat(2, 1, 500),
            'precio_venta' => $this->faker->randomFloat(2, 10, 1000),
            'stock_inicial' => $this->faker->numberBetween(1, 100),
            'stock_actual' => $this->faker->numberBetween(1, 100),
            'fecha_produccion' => $this->faker->date,
            'fecha_vencimiento' => $this->faker->date,
            'idingreso' => "1"
        ];
    }
}
