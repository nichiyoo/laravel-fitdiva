<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $categories = array_to_object([
      [
        'category' => 'Beginner Fitness',
        'description' => 'Articles to help you start your fitness journey with confidence and clarity.',
        'titles' => [
          '5 Low-Impact Workouts Perfect for Beginners',
          'How to Start a Consistent Morning Yoga Routine',
          'Simple Warm-Up Exercises Before a Workout',
          'Understanding Your Core: Strengthening from Within',
          'Easy Cardio Exercises to Do at Home',
        ],
      ],
      [
        'category' => 'Strength & Training',
        'description' => 'Empowering strength routines and tips tailored for women.',
        'titles' => [
          'Why Strength Training Is Essential for Women',
          'Top Pilates Moves to Tone Your Abs',
          'How to Create a Weekly Fitness Plan That Works',
          'Pre and Post Workout Nutrition Tips',
          'Beginner\'s Guide to Resistance Bands',
        ],
      ],
      [
        'category' => 'Lifestyle & Wellness',
        'description' => 'A holistic approach to fitness, mental health, and everyday energy.',
        'titles' => [
          'Stretching 101: Improve Flexibility & Recovery',
          'How to Stay Active During Your Menstrual Cycle',
          'Best Home Workouts for Busy Moms',
          'The Benefits of Walking for Mental Health',
          'How to Build Confidence Through Fitness',
        ],
      ],
      [
        'category' => 'Mindful Movement',
        'description' => 'Move with intention. These articles focus on recovery, balance, and mindful routines.',
        'titles' => [
          'Yoga Poses to Reduce Stress and Anxiety',
          'How to Avoid Common Workout Injuries',
          'Creating a Rest and Recovery Routine',
          'Getting Back on Track After a Fitness Break',
          'Fun Dance Workouts That Burn Calories Fast',
        ],
      ],
    ]);

    $counter = 1;

    foreach ($categories as $item) {
      $category = Category::create([
        'name' => $item->category,
        'slug' => Str::slug($item->category),
        'description' => $item->description,
      ]);

      foreach ($item->titles as $title) {
        Article::factory()->create([
          'title' => $title,
          'slug' => Str::slug($title),
          'image' => asset('images/articles/article-' . $counter . '.jpg'),
          'category_id' => $category->id,
        ]);

        $counter %= 10;
        $counter++;
      }
    }
  }
}
