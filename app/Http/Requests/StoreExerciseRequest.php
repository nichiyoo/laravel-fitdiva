<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreExerciseRequest extends FormRequest
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
      'name' => ['required', 'string', 'max:255', Rule::unique('exercises', 'name')],
      'description' => ['required', 'string'],
      'sets' => ['required', 'integer', 'min:1'],
      'reps' => ['required', 'integer', 'min:1'],
      'image' => ['nullable', 'image', 'max:1024'],
      'video' => ['nullable', 'url'],
    ];
  }
}
