<?php

namespace App\Models;

use App\Traits\HasImageUpload;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Exercise extends Model
{
  /** @use HasFactory<\Database\Factories\ExerciseFactory> */
  use HasFactory;
  use HasImageUpload;

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
    'video_url',
  ];

  /**
   * Model relationship with the Article model.
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function articles(): HasMany
  {
    return $this->hasMany(Article::class);
  }
}
