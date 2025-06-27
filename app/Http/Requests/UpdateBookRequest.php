<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'isbn' => 'required|string|unique:books,isbn,' . $this->route('book'),
            'publicationYear' => 'required|integer|min:1000|max:' . date('Y'),
            'genre' => 'required|string|max:100',
            'availableCopies' => 'required|integer|min:0',
            'author_id' => 'required|exists:authors,id',
        ];
    }
}