<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\Course;
use App\Models\Exercise;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    User::factory()->create([
      'name' => 'Administrator',
      'email' => 'admin@example.com',
      'role' => 'Administrator',
    ]);

    User::factory()->create([
      'name' => 'Test User',
      'email' => 'test@example.com',
    ]);

    $courses = array_to_object([
      [
        'name' => 'Aerobic',
        'description' => 'Aerobic exercises are great for improving cardiovascular health, endurance, and strength.',
        'slug' => 'aerobic',
        'image' => asset('images/courses/course-1.jpg'),
      ],
      [
        'name' => 'Sports For Beginners',
        'description' => 'Sports For Beginners are great for improving cardiovascular health, endurance, and strength.',
        'slug' => 'sports-for-beginners',
        'image' => asset('images/courses/course-2.jpg'),
      ],
      [
        'name' => 'Sports For Pregnant',
        'description' => 'Sports For Pregnant are great for improving cardiovascular health, endurance, and strength.',
        'slug' => 'sports-for-pregnant',
        'image' => asset('images/courses/course-3.jpg'),
      ],
      [
        'name' => 'Sports For Menstruation',
        'description' => 'Sports For Menstruation are great for improving cardiovascular health, endurance, and strength.',
        'slug' => 'sports-for-menstruation',
        'image' => asset('images/courses/course-4.jpg'),
      ],
      [
        'name' => 'Weightlifting',
        'description' => 'Weightlifting is great for improving cardiovascular health, endurance, and strength.',
        'slug' => 'weightlifting',
        'image' => asset('images/courses/course-5.jpg'),
      ],
      [
        'name' => 'Pilates',
        'description' => 'Pilates is great for improving cardiovascular health, endurance, and strength.',
        'slug' => 'pilates',
        'image' => asset('images/courses/course-6.jpg'),
      ],
    ]);

    foreach ($courses as $course) {
      Course::factory()->create([
        'name' => $course->name,
        'description' => $course->description,
        'slug' => $course->slug,
        'image' => $course->image,
      ]);
    }

    Category::factory(3)->create()->each(function ($category) {
      Article::factory(3)->create([
        'category_id' => $category->id,
      ]);
    });

    Exercise::factory(5)->create();
  }
}
