<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Support\Str;
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
  public function definition(): array
  {
    $title = fake()->sentence();
    $paragraphs = fake()->paragraphs(10);
    $paragraphs = array_map(fn($paragraph) => $paragraph . '<br/><br/>', $paragraphs);
    $paragraphs = implode('', $paragraphs);

    return [
      'title' => $title,
      'slug' => Str::slug($title),
      'image' => fake()->imageUrl(),
      'excerpt' => fake()->paragraph(),
      'content' => $paragraphs,
      'category_id' => Category::inRandomOrder()->first()->id,
      'created_at' => fake()->dateTimeBetween('-1 year', 'now'),
      'updated_at' => fake()->dateTimeBetween('-1 year', 'now'),
    ];
  }
}
