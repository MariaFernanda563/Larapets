{{-- - <x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>--}}
@extends('layouts.home')

@section('title', 'Forgot your password: Larapets🐾')

@section('content')
    <section class="bg-[#000000b4] text-white rounded-lg w-96 p-8 flex flex-col gap-4 items-center justify-center">
        <h1 class="flex gap-4 justify-center items-center text-4xl">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-12" fill="currentColor" viewBox="0 0 256 256">
                <path d="M144,157.68a68,68,0,1,0-71.9,0c-20.65,6.76-39.23,19.39-54.17,37.17a8,8,0,0,0,12.25,10.3C50.25,181.19,77.91,168,108,168s57.75,13.19,77.87,37.15a8,8,0,0,0,12.25-10.3C183.18,177.07,164.6,164.44,144,157.68ZM56,100a52,52,0,1,1,52,52A52.06,52.06,0,0,1,56,100Zm197.66,33.66-32,32a8,8,0,0,1-11.32,0l-16-16a8,8,0,0,1,11.32-11.32L216,148.69l26.34-26.35a8,8,0,0,1,11.32,11.32Z"></path>
            </svg>
            Password Reset
        </h1>
        <div class="card w-full max-w-sm">
            <form method="POST" action="{{ route('password.store') }}" class="card-body">
                @csrf

                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <label class="label">Email</label>
                <input type="text" class="input bg-[#0009]" name="email" placeholder="Email" value="{{ old('email') }}" />
                @error('email')
                    <small class="badge badge-error w-full -mt-1 text-xs py-4">{{ $message }}</small>
                @enderror

                <label class="label">Password</label>
                <input type="password" class="input bg-[#0009]" name="password" placeholder="Password" />
                @error('password')
                    <small class="badge badge-error w-full -mt-1">{{ $message }}</small>
                @enderror

                <label class="label">Password Confirmation</label>
                <input type="password" class="input bg-[#0009]" name="password_confirmation" placeholder="Password Confirmation" />
                @error('password_confirmation')
                    <small class="badge badge-error w-full -mt-1">{{ $message }}</small>
                @enderror

                <button class="btn btn-outline hover:bg-[#fff6] hover:text-white mt-4">Password Reset</button>

            </form>
        </div>
        </div>
        </form>
    </section>
@endsection