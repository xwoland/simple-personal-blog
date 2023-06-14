<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateArticleRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title'    => 'required',
            'image'    => 'nullable|image|dimensions:max-width=1000,max_height=1200',
            'article'  => 'required',
            'category' => 'required|integer|exists:categories,id',
            'tags'     => 'required'
        ];
    }
}
