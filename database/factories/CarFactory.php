<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => fake()->name(),
            'marca' => fake()->name(),
            'motor' => fake()->randomFloat(1, 1.0, 5.0),
            'combustivel' => fake()->randomElement(['Gasolina', 'Etanol', 'Eletrico', 'Flex', 'Hibrido'])
        ];
    }
}
