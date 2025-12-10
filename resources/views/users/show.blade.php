@extends('layouts.dashboard')

@section('title', 'Show User: Larapets 🐶')

@section('content')
    <h1 class="text-4xl text-white flex gap-2 items-center justify-center pb-4 border-b-2 border-neutra-50 mb-10">
        <svg xmlns="http://www.w3.org/2000/svg" class="size-12" fill="currentColor" viewBox="0 0 256 256">
            <path
                d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm48-88a8,8,0,0,1-8,8H136v32a8,8,0,0,1-16,0V136H88a8,8,0,0,1,0-16h32V88a8,8,0,0,1,16,0v32h32A8,8,0,0,1,176,128Z">
            </path>
        </svg>
        Show User
    </h1>
    {{-- Breadcrumbs --}}
    <div class="breadcrumbs text-sm text-white">
        <ul>
            <li>
                <a href="{{ url('dashboard') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="currentColor" viewBox="0 0 256 256">
                        <path
                            d="M104,40H56A16,16,0,0,0,40,56v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V56A16,16,0,0,0,104,40Zm0,64H56V56h48v48Zm96-64H152a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V56A16,16,0,0,0,200,40Zm0,64H152V56h48v48Zm-96,32H56a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V152A16,16,0,0,0,104,136Zm0,64H56V152h48v48Zm96-64H152a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V152A16,16,0,0,0,200,136Zm0,64H152V152h48v48Z">
                        </path>
                    </svg>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{ url('users') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="currentColor" viewBox="0 0 256 256">
                        <path
                            d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z">
                        </path>
                    </svg>
                    Users Module
                </a>
            </li>
            <li>
                <span class="inline-flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="currentColor" viewBox="0 0 256 256">
                        <path
                            d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm48-88a8,8,0,0,1-8,8H136v32a8,8,0,0,1-16,0V136H88a8,8,0,0,1,0-16h32V88a8,8,0,0,1,16,0v32h32A8,8,0,0,1,176,128Z">
                        </path>
                    </svg>
                    Add User
                </span>
            </li>
        </ul>
    </div>
    {{-- -Card --}}
    <div class="bg-[#0009] p-10 rounded-sm">
        {{-- -Photo --}}
        <div
            class="avatar flex flex-col gap-2 items-center justify-center cursor-pointer hover:scale-110 transition ease-in">
            <div class="mask mask-squircle w-60">
                <img src="{{ asset('images/' . $user->photo) }}" />
            </div>
        </div>
        {{-- -Data --}}
        <div class="flex gap-2 flex-col md:flex-row">
            <ul class="list bg-[#0009] mt-4 text-white rounded-box shadow-md">
                <li class="list-row">
                    <span class="text-[#fff9] font-semibold">Document:</span> <span> {{ $user->document }}</span>
                </li>
                <li class="list-row">
                    <span class="text-[#fff9] font-semibold">FullName:</span> <span class="text-[#fff9]">
                        {{ $user->fullname }}</span>
                </li>
                <li class="list-row">
                    <span class="text-[#fff9] font-semibold">Gender:</span> <span class="text-[#fff9]">
                        {{ $user->gender }}</span>
                </li>
                <li class="list-row">
                    <span class="text-[#fff9] font-semibold">Birthdate:</span> <span class="text-[#fff9]">
                        {{ $user->birthdate }}</span>
                </li>
                <li class="list-row">
                    <span class="text-[#fff9] font-semibold">Phone:</span> <span class="text-[#fff9]">
                        {{ $user->phone }}</span>
                </li>
                </ul>

                <ul class="list bg-[#0009] mt-4 text-white rounded-box shadow-md">
                    <li class="list-row">
                        <span class="text-[#fff9] font-semibold">Email:</span> <span> {{ $user->email }}</span>
                    </li>
                    <li class="list-row">
                        <span class="text-[#fff9] font-semibold">Active:</span> <span class="text-[#fff9]">
                        <span>
                            @if ($user->active == 1)
                                <div class="badge badge-outline badge-success">Active</div>
                            @else
                                <div class="badge badge-outline badge-error">Inactive</div>
                            @endif
                        </span>
                    </li>
                    <li class="list-row">
                        <span class="text-[#fff9] font-semibold">Role:</span> <span class="text-[#fff9]">
                        <span>
                            @if ($user->role == 'Administrator')
                                <div class="badge badge-outline badge-success">Admin</div>
                            @else
                                <div class="badge badge-outline badge-error">Customer</div>
                            @endif
                        </span>
                    </li>
                    <li class="list-row">
                        <span class="text-[#fff9] font-semibold">Created at:</span>
                        <span>{{ $user->created_at->diffForHumans() }}</span>
                    </li>
                    <li class="list-row">
                        <span class="text-[#fff9] font-semibold">Update at:</span>
                        <span>{{ $user->updated_at->diffForHumans() }}</span>
                    </li>
                </ul>
        </div>
    </div>
@endsection