<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateExerciseRequest extends FormRequest
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
      'name' => ['required', 'string', 'max:255', Rule::unique('exercises', 'name')->ignore($this->exercise)],
      'slug' => ['required', 'string', 'max:255', Rule::unique('exercises', 'slug')->ignore($this->exercise)],
      'description' => ['required', 'string'],
      'image' => ['nullable', 'image', 'max:4096'],
      'video_url' => ['nullable', 'string', 'url'],
    ];
  }
}
