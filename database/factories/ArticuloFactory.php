<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Articulo>
 */
class ArticuloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'codigo' => $this->faker->unique()->ean13,
            'nombre' => $this->faker->word,
            'descripcion' => $this->faker->text,
            'imagen' => $this->faker->imageUrl(), 
            'idcategoria' => "1",
            'idpresentacion' => "1",
        ];
    }
}
