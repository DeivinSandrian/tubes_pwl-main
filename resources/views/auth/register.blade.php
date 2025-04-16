<<<<<<< HEAD
@extends('layouts.auth')

@section('title', 'Register')

@section('content')
    <h3 class="card-title text-left mb-3">Register a New Account</h3>
    <h6 class="fw-light">Fill in the details to get started.</h6>
    @if (session('status'))
        <div class="alert alert-success mb-4">
            {{ session('status') }}
        </div>
    @endif

    <form class="pt-3" method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Nama -->
        <div class="form-group">
            <input type="text" name="nama" id="nama" class="form-control form-control-lg @error('nama') is-invalid @enderror" placeholder="Nama" value="{{ old('nama') }}" required autofocus>
            @error('nama')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Email -->
        <div class="form-group">
            <input type="email" name="email" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" required>
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Password -->
        <div class="form-group">
            <input type="password" name="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="Password" required>
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Password Confirmation -->
        <div class="form-group">
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control form-control-lg" placeholder="Confirm Password" required>
        </div>

        <!-- Role -->
        <div class="form-group">
            <select name="role" id="role" class="form-control form-control-lg @error('role') is-invalid @enderror" required>
                <option value="" disabled selected>Select Role</option>
                <option value="mahasiswa">Mahasiswa</option>
                <option value="ketua">Ketua</option>
                <option value="tatausaha">Tata Usaha</option>
            </select>
            @error('role')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Program Studi -->
        <div class="form-group">
            <select name="program_studi_id_prodi" id="program_studi_id_prodi" class="form-control form-control-lg @error('program_studi_id_prodi') is-invalid @enderror" required>
                <option value="" disabled selected>Select Program Studi</option>
                @if (isset($programStudis) && $programStudis->isNotEmpty())
                    @foreach ($programStudis as $programStudi)
                        <option value="{{ $programStudi->id_prodi }}">{{ $programStudi->nama_prodi }}</option>
                    @endforeach
                @else
                    <option value="" disabled>No Program Studi available</option>
                @endif
            </select>
            @error('program_studi_id_prodi')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Register</button>
        </div>
 
        <div class="text-center mt-4 fw-light">
            Already have an account? <a href="{{ route('login') }}" class="text-primary">Login here</a>
        </div>
    </form>
@endsection
=======
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <x-input-label for="id_user" :value="__('ID User')" />
            <x-text-input id="id_user" class="block mt-1 w-full" type="text" name="id_user" :value="old('id_user')" required autofocus autocomplete="id_user" />
            <x-input-error :messages="$errors->get('id_user')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="nama" :value="__('Nama')" />
            <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama')" required autocomplete="name" />
            <x-input-error :messages="$errors->get('nama')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- <div class="mt-4">
            <x-input-label for="program_studi" :value="__('Program Studi')" />
            <x-text-input id="program_studi" class="block mt-1 w-full" type="text" name="program_studi" :value="old('program_studi')" required />
            <x-input-error :messages="$errors->get('program_studi')" class="mt-2" />
        </div> -->

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
>>>>>>> 1811f1896ddb1aab15e58016dfa8de2ab0b068bf
