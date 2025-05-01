<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCourseRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   */
  public function authorize(): bool
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
   */
  public function rules(): array
  {
    return [
      'name' => ['required', 'string', 'max:255'],
      'slug' => ['required', 'string', 'max:255', Rule::unique('courses', 'slug')],
      'description' => ['required', 'string'],
      'content' => ['required', 'string'],
      'image' => ['nullable', 'image', 'max:2048'],
      'video_url' => ['nullable', 'string', 'url'],
    ];
  }
}
