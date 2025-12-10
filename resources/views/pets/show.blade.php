@extends('layouts.dashboard')

@section('title', 'Show Pet: Larapets 🐶')

@section('content')
    <h1 class="text-4xl text-white flex gap-2 items-center justify-center pb-4 border-b-2 border-neutra-50 mb-10">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
            <path
                d="M212,80a28,28,0,1,0,28,28A28,28,0,0,0,212,80Zm0,40a12,12,0,1,1,12-12A12,12,0,0,1,212,120ZM72,108a28,28,0,1,0-28,28A28,28,0,0,0,72,108ZM44,120a12,12,0,1,1,12-12A12,12,0,0,1,44,120ZM92,88A28,28,0,1,0,64,60,28,28,0,0,0,92,88Zm0-40A12,12,0,1,1,80,60,12,12,0,0,1,92,48Zm72,40a28,28,0,1,0-28-28A28,28,0,0,0,164,88Zm0-40a12,12,0,1,1-12,12A12,12,0,0,1,164,48Zm23.12,100.86a35.3,35.3,0,0,1-16.87-21.14,44,44,0,0,0-84.5,0A35.25,35.25,0,0,1,69,148.82,40,40,0,0,0,88,224a39.48,39.48,0,0,0,15.52-3.13,64.09,64.09,0,0,1,48.87,0,40,40,0,0,0,34.73-72ZM168,208a24,24,0,0,1-9.45-1.93,80.14,80.14,0,0,0-61.19,0,24,24,0,0,1-20.71-43.26,51.22,51.22,0,0,0,24.46-30.67,28,28,0,0,1,53.78,0,51.27,51.27,0,0,0,24.53,30.71A24,24,0,0,1,168,208Z">
            </path>
        </svg>
        Show Pet
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
                <a href="{{ url('pets') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="currentColor" viewBox="0 0 256 256">
                        <path
                            d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z">
                        </path>
                    </svg>
                    Pets Module
                </a>
            </li>
            <li>
                <span class="inline-flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="currentColor" viewBox="0 0 256 256">
                        <path
                            d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm48-88a8,8,0,0,1-8,8H136v32a8,8,0,0,1-16,0V136H88a8,8,0,0,1,0-16h32V88a8,8,0,0,1,16,0v32h32A8,8,0,0,1,176,128Z">
                        </path>
                    </svg>
                    Add Pet
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
                <img src="{{ asset('images/' . $pet->image) }}" />
            </div>
        </div>
        {{-- -Data --}}
        <div class="flex gap-2 flex-col md:flex-row">
            <ul class="list bg-[#0009] mt-4 text-white rounded-box shadow-md">
                <li class="list-row">
                    <span class="text-[#fff9] font-semibold">Name</span> <span> {{ $pet->name }}</span>
                </li>
                <li class="list-row">
                    <span class="text-[#fff9] font-semibold">Kind</span> 
                    <span class="text-[#fff9]">
                        @if ($pet->kind == 'Dog')
                            <div class="badge badge-outline badge-warning">Dog</div>
                        @elseif ($pet->kind == 'Cat')
                            <div class="badge badge-outline badge-info">Cat</div>
                        @elseif ($pet->kind == 'Bird')
                            <div class="badge badge-outline badge-success">Bird</div>
                        @elseif ($pet->kind == 'Pig')
                            <div class="badge badge-outline badge-error">Pig</div>
                        @else
                            <div class="badge badge-outline">{{ $pet->kind }}</div>
                        @endif
                    </span>
                </li>
                <li class="list-row">
                    <span class="text-[#fff9] font-semibold">Weight</span> <span class="text-[#fff9]">
                        {{ $pet->weight }} Kg</span>
                </li>
                <li class="list-row">
                    <span class="text-[#fff9] font-semibold">Age</span> <span class="text-[#fff9]">
                        {{ $pet->age }} Years</span>
                </li>
                <li class="list-row">
                    <span class="text-[#fff9] font-semibold">Breed</span> <span class="text-[#fff9]">
                        {{ $pet->breed }}</span>
                </li>
                <li class="list-row">
                    <span class="text-[#fff9] font-semibold">Location</span> <span> {{ $pet->location }}</span>
                </li>
            </ul>

            <ul class="list bg-[#0009] mt-4 text-white rounded-box shadow-md">
                <li class="list-row">
                    <span class="text-[#fff9] font-semibold">Desciption</span> <span> {{ $pet->description }}</span>
                </li>
                <li class="list-row">
                    <span class="text-[#fff9] font-semibold">Active</span>
                    <span>
                        @if ($pet->active == 1)
                            <div class="badge badge-outline badge-success">Active</div>
                        @else
                            <div class="badge badge-outline badge-error">Inactive</div>
                        @endif
                    </span>
                </li>
                <li class="list-row">
                    <span class="text-[#fff9] font-semibold">Status</span>
                    <span>
                        @if ($pet->status == 0)
                            <div class="badge badge-outline badge-success">Available</div>
                        @else
                            <div class="badge badge-outline badge-error">Adopted</div>
                        @endif
                    </span>
                </li>
                <li class="list-row">
                    <span class="text-[#fff9] font-semibold">Created</span> <span class="text-[#fff9]">
                        {{ $pet->created_at->format('d/m/Y H:i') }}</span>
                </li>
                <li class="list-row">
                    <span class="text-[#fff9] font-semibold">Updated</span> <span class="text-[#fff9]">
                        {{ $pet->updated_at->format('d/m/Y H:i') }}</span>
                </li>
            </ul>
        </div>
    </div>
@endsection