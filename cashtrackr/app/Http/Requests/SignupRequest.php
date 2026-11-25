<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class SignupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function messages(): array
    {
        return [
            'name.required' => 'El nombre es requerido',
            'email.required' => 'El email es requerido',
            'email.email' => 'Este email no es válido',
            'password.required' => 'La contraseña es requerida',
            'password.confirmed' => 'Las contraseñas no coinciden',
            'password.min' => 'La contraseña debe tener al menos :min caracteres',
            'password.letters' => 'La contraseña debe tener al menos 1 letra',
            'password.mixed' => 'La contraseña debe tener al menos 1 mayúscula y una minúscula',
            'password.symbols' => 'La contraseña debe tener al menos 1 caracter especial (#$&+...)',
            'password.numbers' => 'La contraseña debe tener al menos 1 valor numerico',
            'password.uncompromised' => 'La contraseña ha aparecido en filtraciones de datos',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed',
                Password::min(4)
                    ->letters()
                    ->mixedCase()
                    ->symbols()
                    ->numbers()
                    ->uncompromised(),
            ],
        ];
    }
}
