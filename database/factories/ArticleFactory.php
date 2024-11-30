<?php

namespace Database\Factories;
use App\Models\Article;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Article::class;


    public function definition(): array
    {
        return [
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'discount_type' => $this->faker->randomElement(['none', 'percentage', 'fixed']),
            'discount_value' => $this->faker->randomFloat(2, 0, 50),
            'status' => $this->faker->randomElement(['published', 'draft', 'inactive']),
            'quantite' => $this->faker->randomFloat(2, 1, 100),
            'couverture' => $this->faker->imageUrl(640, 480, 'products', true),
        ];
    }
}
