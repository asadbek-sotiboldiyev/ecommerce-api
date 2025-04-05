<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => rand(1, 4),
            'name' => [
                'uz' => fake()->sentence(rand(1, 3)),
                'ru' => "Шкаф-купе",
            ],
            'price' => rand(50, 10000) * 1000,
            'description' => [
                'uz' => fake()->paragraph(5),
                'ru' => "Вместительный трехдверный шкаф Trio сделан в модном оформлении и станет нетривиальной частью любой современной обстановки. Внутри расположено большое отделение со штангой для вешалок и отсек с полками. Достаточно глубокое внутреннее пространство позволяет хранить в таком шкафу небольшой чемодан или коробки с обувью."
            ]
        ];
    }
}
