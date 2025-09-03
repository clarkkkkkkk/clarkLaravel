<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clark>
 */
class ClarkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //new cark record;
            'name' => fake()->name(),
            'bio' => fake()->realText(500), //fake() - generates fake information
            'skill' => fake()->numberBetween(0,100) 
        ];
    }
}
