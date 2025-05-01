<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePlanRequest extends FormRequest
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
      'month' => ['required', 'integer', 'min:0'],
      'description' => ['required', 'string'],
      'image' => ['nullable', 'image', 'max:2048'],
      'sets' => ['required', 'integer', 'min:1'],
      'reps' => ['required', 'integer', 'min:1'],
      'exercise_id' => ['required', 'exists:exercises,id'],
    ];
  }
}
