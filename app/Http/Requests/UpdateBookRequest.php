<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    } 
    protected function failedValidation(Validator $validator){

        throw new HttpResponseException(
            response()->json(
                ['success' => false,
                'message' => $validator->errors()
            ], 412
            )
        );
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'title' => 'required|string|min:2|max:255',
            'isbn' => 'required|string|min:10|max:20',
            'publicationYear' => 'required|integer|digits:4',
            'genre' => 'required|string|max:100',
            'availableCopies' => 'required|integer|min:0'
        ];
    }
}
