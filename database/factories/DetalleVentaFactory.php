<?php

namespace Database\Factories;

use App\Models\Venta;
use App\Models\DetalleIngreso;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetalleVenta>
 */
class DetalleVentaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'idventa' => function () {
                return Venta::inRandomOrder()->value('idventa');
            },
            'iddetalle_ingreso' => function () {
                return DetalleIngreso::inRandomOrder()->value('iddetalle_ingreso');
            },
            'cantidad' => $this->faker->numberBetween(1, 10),
            'precio_venta' => $this->faker->randomFloat(2, 10, 1000),
            'descuento' => $this->faker->randomFloat(2, 0, 50),
        ];
    }
}
