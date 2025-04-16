<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    $name = fake()->sentence();
    $paragraphs = fake()->paragraphs(10);
    $paragraphs = array_map(fn($paragraph) => $paragraph . '<br/><br/>', $paragraphs);
    $paragraphs = implode('', $paragraphs);

    return [
      'name' => $name,
      'description' => fake()->paragraph(),
      'slug' => Str::slug($name),
      'image' => fake()->imageUrl(),
      'content' => $paragraphs,
    ];
  }
}
