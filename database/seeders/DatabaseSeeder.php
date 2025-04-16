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
        'video_url' => 'https://www.youtube.com/embed/v8CDptlpeys',
      ],
      [
        'name' => 'Sports For Beginners',
        'description' => 'Sports For Beginners are great for improving cardiovascular health, endurance, and strength.',
        'slug' => 'sports-for-beginners',
        'image' => asset('images/courses/course-2.jpg'),
        'video_url' => 'https://www.youtube.com/embed/cbKkB3POqaY',
      ],
      [
        'name' => 'Sports For Pregnant',
        'description' => 'Sports For Pregnant are great for improving cardiovascular health, endurance, and strength.',
        'slug' => 'sports-for-pregnant',
        'image' => asset('images/courses/course-3.jpg'),
        'video_url' => 'https://www.youtube.com/embed/InQu8jMT130',
      ],
      [
        'name' => 'Sports For Menstruation',
        'description' => 'Sports For Menstruation are great for improving cardiovascular health, endurance, and strength.',
        'slug' => 'sports-for-menstruation',
        'image' => asset('images/courses/course-4.jpg'),
        'video_url' => 'https://www.youtube.com/embed/ptC6gK3QbLg',
      ],
      [
        'name' => 'Weightlifting',
        'description' => 'Weightlifting is great for improving cardiovascular health, endurance, and strength.',
        'slug' => 'weightlifting',
        'image' => asset('images/courses/course-5.jpg'),
        'video_url' => 'https://www.youtube.com/embed/0hYDDsRjwks',
      ],
      [
        'name' => 'Pilates',
        'description' => 'Pilates is great for improving cardiovascular health, endurance, and strength.',
        'slug' => 'pilates',
        'image' => asset('images/courses/course-6.jpg'),
        'video_url' => 'https://www.youtube.com/embed/u3UjeyPOjoU',
      ],
    ]);

    foreach ($courses as $course) {
      Course::factory()->create([
        'name' => $course->name,
        'description' => $course->description,
        'slug' => $course->slug,
        'image' => $course->image,
        'video_url' => $course->video_url,
      ]);
    }

    $counter = 1;
    Category::factory(4)->create()->each(function ($category) {
      Article::factory(5)->create([
        'category_id' => $category->id,
      ]);
    });

    $counter = 1;
    $articles = Article::all();

    foreach ($articles as $article) {
      $article->image = asset('images/articles/article-' . $counter . '.jpg');
      $article->save();
      $counter++;
    }

    Exercise::factory(5)->create();
  }
}
