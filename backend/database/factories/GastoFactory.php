<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gasto>
 */
class GastoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_categoria_gasto' => $this->faker->randomElement([1,2,3,4]),
            'valor' => $this->faker->randomFloat(2,0,800),
            'data' => $this->faker->date(),
            'descricao' => $this->faker->text(150),
        ];
    }
}
