<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Persona>
 */
class PersonaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->sentence(),
            'RFC'=>$this->faker->sentence(),
            'fechaNacimiento'=>$this->faker->date(),
            'CorreoElectronico'=>$this->faker->freeEmail(),
            'edad'=>$this->faker->numberBetween($min = 20, $max = 100)
        ];
    }
}
