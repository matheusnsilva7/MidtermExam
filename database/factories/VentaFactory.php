<?php

namespace Database\Factories;

use App\Models\Cliente;
use App\Models\Trabajador;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Venta>
 */
class VentaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'idcliente' => function () {
                return Cliente::inRandomOrder()->value('idcliente');
            },
            'idtrabajador' => function () {
                return Trabajador::inRandomOrder()->value('idtrabajador');
            },
            'fecha' => $this->faker->date,
            'tipo_comprobante' => $this->faker->randomElement(['Factura', 'Boleta']),
            'setie' => $this->faker->word,
            'correlativo' => $this->faker->unique()->numerify('########'),
            'igvestado' => $this->faker->randomElement(['Pendente', 'Pago']),
        ];
    }
}
