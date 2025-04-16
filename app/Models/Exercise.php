<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
  /** @use HasFactory<\Database\Factories\ExerciseFactory> */
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<string>
   */
  protected $fillable = [
    'name',
    'description',
    'image',
    'sets',
    'reps',
    'video',
  ];
}
