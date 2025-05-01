<?php

namespace App\Models;

use App\Traits\HasImageUpload;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Plan extends Model
{
  use HasImageUpload;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'name',
    'month',
    'description',
    'image',
    'sets',
    'reps',
    'user_id',
    'exercise_id',
  ];

  /**
   * Model relationship with the User model.
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function user(): BelongsTo
  {
    return $this->belongsTo(User::class);
  }

  /**
   * Model relationship with the Exercise model.
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function exercise(): BelongsTo
  {
    return $this->belongsTo(Exercise::class);
  }
}
