<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProgramminglanguagesRequest extends FormRequest
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
            'name' => ['required','string'],
            'creator' => ['required','string'],
            'release_date' => ['required','date'],
            'description' => ['nullable','string'],
            'current_version' => ['required','numeric'],
            'is_active' => ['required','boolean'],
            'paradigm' => ['required','integer'],
            'website' => ['nullable','url'],
            'category_id' => ['required','integer']
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'category_id.required' => 'category_id es requerido'
        ];
    }
}
