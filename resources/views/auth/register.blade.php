{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
--}}
@extends('layouts.home')

@section('title', 'Login: Larapets🐾')

@section('content')
    <section
        class="bg-[#000000b4] text-white rounded-lg md:w-[640px] w-[360px] p-8 flex flex-col gap-4 items-center justify-center">
        <h1 class="flex gap-4 justify-center items-center text-4xl">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-12" fill="currentColor" viewBox="0 0 256 256">
                <path
                    d="M256,136a8,8,0,0,1-8,8H232v16a8,8,0,0,1-16,0V144H200a8,8,0,0,1,0-16h16V112a8,8,0,0,1,16,0v16h16A8,8,0,0,1,256,136Zm-57.87,58.85a8,8,0,0,1-12.26,10.3C165.75,181.19,138.09,168,108,168s-57.75,13.19-77.87,37.15a8,8,0,0,1-12.25-10.3c14.94-17.78,33.52-30.41,54.17-37.17a68,68,0,1,1,71.9,0C164.6,164.44,183.18,177.07,198.13,194.85ZM108,152a52,52,0,1,0-52-52A52.06,52.06,0,0,0,108,152Z">
                </path>
            </svg>
            Register
        </h1>
        <div class="card w-full">
            <form method="POST" action="{{ route('register') }}" class="flex flex-col md:flex-row gap-4 mt-4 ">
                @csrf
                <div class="w-full md:w-[320px]">
                    {{-- Document --}}
                    <label class="label">Document</label>
                    <input type="number" class="input bg-[#0009]" name="document" placeholder="123456789"
                        value="{{ old('document') }}" />
                    @error('document')
                        <small class="badge badge-error w-full -mt-1 text-xs py-4">{{ $message }}</small>
                    @enderror

                    {{-- Fullname --}}
                    <label class="label">Full Name</label>
                    <input type="text" class="input bg-[#0009]" name="fullname" placeholder="Jeremias Springfield"
                        value="{{ old('fullname') }}" />
                    @error('fullname')
                        <small class="badge badge-error w-full -mt-1 text-xs py-4">{{ $message }}</small>
                    @enderror

                    {{-- Gender --}}
                    <label class="label">Gender</label>
                    <select name="gender" class="select bg-[#0009] outline-0">
                        <option value="">Select...</option>
                        <option value="Female" @if (old('gender') == 'Female') selected @endif>Female</option>
                        <option value="Male" @if (old('gender') == 'Male') selected @endif>Male</option>
                    </select>
                    @error('gender')
                        <small class="badge badge-error w-full -mt-1 text-xs py-4">{{ $message }}</small>
                    @enderror

                    {{-- Birthdate --}}
                    <label class="label">Birthdate</label>
                    <input type="date" class="input bg-[#0009]" name="birthdate" placeholder="1983-06-16"
                        value="{{ old('birthday') }}" />
                    @error('birthday')
                        <small class="badge badge-error w-full -mt-1 text-xs py-4">{{ $message }}</small>
                    @enderror
                </div>

                <div class="w-full md:w-[320px]">
                    {{-- phone --}}
                    <label class="label">Phone</label>
                    <input type="number" class="input bg-[#0009]" name="phone" placeholder="3204456321"
                        value="{{ old('phone') }}" />
                    @error('phone')
                        <small class="badge badge-error w-full -mt-1 text-xs py-4">{{ $message }}</small>
                    @enderror

                    <label class="label">Email</label>
                    <input type="text" class="input bg-[#0009]" name="email" placeholder="Email"
                        value="{{ old('email') }}" />
                    @error('email')
                        <small class="badge badge-error w-full -mt-1 text-xs py-4">{{ $message }}</small>
                    @enderror

                    <label class="label">Password</label>
                    <input type="password" class="input bg-[#0009]" name="password" placeholder="Password" />
                    @error('password')
                        <small class="badge badge-error w-full -mt-1 text-xs py-4">{{ $message }}</small>
                    @enderror

                    <label class="label">Password Confirmation</label>
                    <input type="password" class="input bg-[#0009]" name="password_confirmation"
                        placeholder="Password Confirmation" />
                    @error('password_confirmation')
                        <small class="badge badge-error w-full -mt-1 text-xs py-4">{{ $message }}</small>
                    @enderror

                    <button class="btn btn-outline hover:bg-[#fff6] hover:text-white mt-4 w-full">Register</button>

                    <p class="text-sm text-center mt-4">
                        Don’t have an account?
                        <a href="{{ route('register') }}" class="link link-default">
                            Sign up
                        </a>
                    </p>
                    <p class="text-sm text-center mt-2">
                        <a class="link link-default" href="{{ route('login') }}">
                            Already registered?
                        </a>
                    </p>
                </div>


            </form>
        </div>
        </div>
        </form>
    </section>
@endsection