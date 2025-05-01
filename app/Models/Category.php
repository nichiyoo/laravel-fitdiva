<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
  /** @use HasFactory<\Database\Factories\CategoryFactory> */
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<string>
   */
  protected $fillable = [
    'name',
    'description',
    'slug'
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
