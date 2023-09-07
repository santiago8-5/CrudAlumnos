<?php

namespace Database\Factories;

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
    public function definition()
    {
        return [
            'name'=>$this->faker->randomElement(['TV', 'SALA', 'SILLA']),
            'costo'=>$this->faker->numberBetween($min = 1000, $max = 5000),
            'color'=>$this->faker->randomElement(['amarillo', 'rojo', 'azul'])
        ];
    }
}
