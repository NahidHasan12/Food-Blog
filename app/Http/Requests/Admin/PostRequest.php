<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
        $rules = [
            'title' => ['required', 'max:50', 'min:10'],
            'details' => ['required', 'max:3000', 'min:300'],
            'category' => ['required'],
            'status' => ['required','max:1'],
            'image' => ['required'],
        ];
        return $rules;
    }
}
