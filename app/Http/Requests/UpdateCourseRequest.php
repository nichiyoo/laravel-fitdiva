<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCourseRequest extends FormRequest
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
      'name' => ['required', 'string', 'max:255', Rule::unique('courses', 'name')->ignore($this->course)],
      'slug' => ['required', 'string', 'max:255', Rule::unique('courses', 'slug')->ignore($this->course)],
      'description' => ['required', 'string'],
      'content' => ['required', 'string'],
      'image' => ['nullable', 'image', 'max:1024'],
    ];
  }
}
