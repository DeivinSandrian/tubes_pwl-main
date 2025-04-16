<?php

namespace App\Http\Requests\Auth;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
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
<<<<<<< HEAD
            'email' => ['required', 'string', 'email'],
=======
            'id_user' => ['required', 'integer', 'max:99999999999'], // Ganti 'email' menjadi 'id_user'
>>>>>>> 1811f1896ddb1aab15e58016dfa8de2ab0b068bf
            'password' => ['required', 'string'],
        ];
    }

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate(): void
    {
        $this->ensureIsNotRateLimited();

<<<<<<< HEAD
        if (! Auth::attempt($this->only('email', 'password'), $this->boolean('remember'))) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
=======
        if (! Auth::attempt($this->only('id_user', 'password'), $this->boolean('remember'))) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'id_user' => trans('auth.failed'), // Ganti 'email' menjadi 'id_user'
>>>>>>> 1811f1896ddb1aab15e58016dfa8de2ab0b068bf
            ]);
        }

        RateLimiter::clear($this->throttleKey());
    }

    /**
     * Ensure the login request is not rate limited.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
<<<<<<< HEAD
            'email' => trans('auth.throttle', [
=======
            'id_user' => trans('auth.throttle', [ // Ganti 'email' menjadi 'id_user'
>>>>>>> 1811f1896ddb1aab15e58016dfa8de2ab0b068bf
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the rate limiting throttle key for the request.
     */
    public function throttleKey(): string
    {
<<<<<<< HEAD
        return Str::transliterate(Str::lower($this->string('email')).'|'.$this->ip());
    }
}
=======
        return Str::transliterate(Str::lower($this->string('id_user')).'|'.$this->ip()); // Ganti 'email' menjadi 'id_user'
    }

    /**
     * Get custom attributes for validator errors.
     */
    public function attributes(): array
    {
        return [
            'id_user' => 'ID User', // Nama atribut untuk pesan error
        ];
    }
}
>>>>>>> 1811f1896ddb1aab15e58016dfa8de2ab0b068bf
