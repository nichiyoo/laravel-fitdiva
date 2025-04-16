<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
  /** @use HasFactory<\Database\Factories\CourseFactory> */
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<string>
   */
  protected $fillable = [
    'name',
    'description',
    'slug',
    'image',
    'content',
  ];
}
