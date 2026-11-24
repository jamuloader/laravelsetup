<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(4),
            'slug' => fake()->slug(),
            'content' => fake()->paragraphs(3, true),
            'excerpt' => fake()->text(),
            'featured_image' => fake()->regexify('[A-Za-z0-9]{255}'),
            'status' => fake()->randomElement(["draft","published","archived"]),
            'published_at' => fake()->dateTime(),
            'category_id' => Category::factory(),
            'user_id' => User::factory(),
        ];
    }
}
