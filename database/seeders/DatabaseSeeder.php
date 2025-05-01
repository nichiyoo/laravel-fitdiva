<?php

namespace Database\Seeders;

use App\Enums\RoleType;
use App\Models\User;
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
      'role' => RoleType::ADMIN,
    ]);

    User::factory()->create([
      'name' => 'Test User',
      'email' => 'test@example.com',
      'role' => RoleType::CUSTOMER,
    ]);

    $this->call([
      CourseSeeder::class,
      ArticleSeeder::class,
      ExerciseSeeder::class,
    ]);
  }
}
