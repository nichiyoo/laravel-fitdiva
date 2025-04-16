<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateArticleRequest extends FormRequest
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
      'title' => ['required', 'string', 'max:255', Rule::unique('articles', 'title')->ignore($this->article)],
      'slug' => ['required', 'string', 'max:255', Rule::unique('articles', 'slug')->ignore($this->article)],
      'category_id' => ['required', 'exists:categories,id'],
      'content' => ['required', 'string'],
      'image' => ['nullable', 'image', 'max:1024'],
    ];
  }
}
