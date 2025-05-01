<?php

namespace App\Models;

use App\Traits\HasImageUpload;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
  /** @use HasFactory<\Database\Factories\CourseFactory> */
  use HasFactory;
  use HasImageUpload;

  /**
   * The attributes that will be used to store the image.
   *
   * @var string
   */
  protected static $media = 'image';

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
    'video_url',
  ];
}
