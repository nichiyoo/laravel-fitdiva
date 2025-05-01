<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Exercise>
 */
class ExerciseFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    $name = fake()->sentence();

    return [
      'name' => $name,
      'description' => fake()->paragraph(),
      'slug' => Str::slug($name),
      'image' => fake()->imageUrl(),
      'video_url' => fake()->url(),
    ];
  }
}
