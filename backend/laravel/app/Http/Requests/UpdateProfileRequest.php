<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'first_name' => ['nullable','string','min:2','max:255','regex:/^[\p{L}\s\'\-]+$/u',],

            'last_name' => ['nullable','string','min:2','max:255','regex:/^[\p{L}\s\'\-]+$/u',],

            'middle_name' => ['nullable','string','min:2','max:255','regex:/^[\p{L}\s\'\-]+$/u',],

            'email' => ['nullable','sometimes','string','email:rfc,dns','min:6','max:255','unique:users'],

            'phone' => ['nullable','string','min:10','max:20','regex:/^[\d+\-\s()]+$/','unique:users'],
        ];
    }
}
