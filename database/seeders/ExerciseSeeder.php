<?php

namespace Database\Seeders;

use App\Models\Exercise;
use Illuminate\Database\Seeder;

class ExerciseSeeder extends Seeder
{
  public function run(): void
  {
    $exercises = array_to_object([
      [
        'name' => 'Standing Side Leg Raises',
        'description' => 'Great for toning the hips and thighs while improving balance and flexibility.',
        'slug' => 'standing-side-leg-raises',
        'image' => asset('images/exercises/exercise-1.jpg'),
        'video_url' => 'https://www.youtube.com/embed/p3UCeXkX0NE',
      ],
      [
        'name' => 'Bodyweight Squats',
        'description' => 'Strengthens your legs, glutes, and core with controlled lower-body movement.',
        'slug' => 'bodyweight-squats',
        'image' => asset('images/exercises/exercise-2.jpg'),
        'video_url' => 'https://www.youtube.com/embed/l83R5PblSMA',
      ],
      [
        'name' => 'Lunges',
        'description' => 'Great for improving balance and strengthening the legs and hips.',
        'slug' => 'lunges',
        'image' => asset('images/exercises/exercise-3.jpg'),
        'video_url' => 'https://www.youtube.com/embed/xrPteyQLGAo',
      ],
      [
        'name' => 'Plank',
        'description' => 'A core stability exercise that strengthens the abdomen and lower back.',
        'slug' => 'plank',
        'image' => asset('images/exercises/exercise-4.jpg'),
        'video_url' => 'https://www.youtube.com/embed/ASdvN_XEl_c',
      ],
      [
        'name' => 'Donkey Kicks',
        'description' => 'An effective glute isolation move commonly used in lower-body toning routines.',
        'slug' => 'donkey-kicks',
        'image' => asset('images/exercises/exercise-5.jpg'),
        'video_url' => 'https://www.youtube.com/embed/Niwu60pFrNg',
      ],
      [
        'name' => 'Push-ups',
        'description' => 'Builds upper body and core strength using bodyweight.',
        'slug' => 'push-ups',
        'image' => asset('images/exercises/exercise-6.jpg'),
        'video_url' => 'https://www.youtube.com/embed/P3D2PPMYWjk',
      ],
      [
        'name' => 'Glute Bridges',
        'description' => 'Targets glutes and hamstrings while improving hip mobility.',
        'slug' => 'glute-bridges',
        'image' => asset('images/exercises/exercise-7.jpg'),
        'video_url' => 'https://www.youtube.com/embed/wPM8icPu6H8',
      ],
      [
        'name' => 'Clamshells',
        'description' => 'A glute-strengthening exercise that targets the hips and outer thighs, commonly used in women’s toning workouts.',
        'slug' => 'clamshells',
        'image' => asset('images/exercises/exercise-8.jpg'),
        'video_url' => 'https://www.youtube.com/embed/rtF5jAnilyQ',
      ],
      [
        'name' => 'Side Plank',
        'description' => 'Strengthens obliques and stabilizes core muscles.',
        'slug' => 'side-plank',
        'image' => asset('images/exercises/exercise-9.jpg'),
        'video_url' => 'https://www.youtube.com/embed/XeN4pEZZJNI',
      ],
      [
        'name' => 'Arm Circles',
        'description' => 'Light warm-up exercise to activate shoulder and upper back muscles.',
        'slug' => 'arm-circles',
        'image' => asset('images/exercises/exercise-10.jpg'),
        'video_url' => 'https://www.youtube.com/embed/kfP_9z-BtmA',
      ],
    ]);

    foreach ($exercises as $exercise) {
      Exercise::factory()->create([
        'name' => $exercise->name,
        'description' => $exercise->description,
        'slug' => $exercise->slug,
        'image' => $exercise->image,
        'video_url' => $exercise->video_url,
      ]);
    }
  }
}
