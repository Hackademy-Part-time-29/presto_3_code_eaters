<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array{
        return [
            'title'=>Str::limit(fake()->text(150), 150),
            'price'=>fake()->numberBetween(1, 100000),
            'description'=>Str::limit(fake()->text(255), 255),
            'category_id'=>fake()->numberBetween(1, 60),
            'user_id'=>fake()->numberBetween(1, 1),
            'is_accepted'=>fake()->numberBetween(0, 1),
        ];
    }
}
