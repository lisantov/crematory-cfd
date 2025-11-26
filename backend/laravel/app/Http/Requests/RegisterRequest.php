<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
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
            'first_name' => ['required','string','min:2','max:255','regex:/^[\p{L}\s\'\-]+$/u',],

            'last_name' => ['required','string','min:2','max:255','regex:/^[\p{L}\s\'\-]+$/u',],

            'middle_name' => ['nullable','string','min:2','max:255','regex:/^[\p{L}\s\'\-]+$/u',],

            'email' => ['nullable','sometimes','string','email:rfc,dns','min:6','max:255','unique:users'],

            'phone' => ['required','string','min:10','max:20','regex:/^[\d+\-\s()]+$/','unique:users'],
            
            'login' => ['required','string','min:6','max:32','alpha_num','unique:users'],

            'password' => ['required','string',
            Password::min(8)->letters()->mixedCase()->numbers()]
        ];
    }

}