<<<<<<< HEAD
@extends('layouts.auth')

@section('title', 'Login')
    
@section('content')
    <h3 class="card-title text-left mb-3">Sign In</h3>
    <h6 class="fw-light">Login to manage your account.</h6>
    @if (session('status'))
        <div class="alert alert-success mb-4">
            {{ session('status') }}
        </div>
    @endif
    <form class="pt-3" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <input type="email" name="email" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" required autofocus>
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" name="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="Password" required>
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Sign In</button>
        </div>
        <!-- <div class="my-2 d-flex justify-content-between align-items-center">
            <a href="{{ route('password.request') }}" class="auth-link text-black">Forgot password?</a>
        </div> -->
        <div class="text-center mt-4 fw-light">
            Don't have an account? <a href="{{ route('register') }}" class="text-primary">Create one</a>
        </div>
    </form>
@endsection
=======
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- ID User -->
        <div>
            <x-input-label for="id_user" :value="__('ID User')" />
            <x-text-input id="id_user" class="block mt-1 w-full" type="number" name="id_user" :value="old('id_user')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('id_user')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div> -->

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
>>>>>>> 1811f1896ddb1aab15e58016dfa8de2ab0b068bf
