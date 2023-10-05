<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trabajador>
 */
class TrabajadorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName,
            'apellidos' => $this->faker->lastName,
            'sexo' => $this->faker->randomElement(['Masculino', 'Femenino']),
            'fecha_nacimiento' => $this->faker->date,
            'num_documento' => $this->faker->unique()->numerify('##########'),
            'direccion' => $this->faker->address,
            'telefono' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'acceso' => $this->faker->randomElement(['Admin', 'Usuário']),
            'usuario' => $this->faker->userName,
            'password' => bcrypt('password123'),
        ];
    }
}
