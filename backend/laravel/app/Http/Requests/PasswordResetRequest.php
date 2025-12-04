<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;
use App\Actions\PasswordNormalization;

class ResetPasswordRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'token' => 'required|string',
            'phone' => 'required|string|exists:users,phone',
            'password' => [
                'required',
                'confirmed',
                Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
                    ->uncompromised(),
            ],
        ];
    }

    protected function prepareForValidation(): void
    {
        if ($this->has('phone')) {
            $this->merge([
                'phone' => PasswordNormalization::run($this->input('phone'))
            ]);
        }
    }

    public function messages(): array
    {
        return [
            'phone.exists' => 'Пользователь с таким телефоном не найден.',
            'password.confirmed' => 'Пароли не совпадают.',
        ];
    }
}
