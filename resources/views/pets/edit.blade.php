@extends('layouts.dashboard')

@section('title', 'Edit Pets: Larapets 🙀')

@section('content')
    <h1 class="text-4xl text-white flex gap-2 items-center justify-center pb-4 border-b-2 border-neutra-50 mb-10">
        <svg xmlns="http://www.w3.org/2000/svg" class="size-12" fill="currentColor" viewBox="0 0 256 256">
            <path
                d="M227.31,73.37,182.63,28.68a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM51.31,160,136,75.31,152.69,92,68,176.68ZM48,179.31,76.69,208H48Zm48,25.38L79.31,188,164,103.31,180.69,120Zm96-96L147.31,64l24-24L216,84.68Z">
            </path>
        </svg>
        Edit Pet
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
                    Edit Pet
                </span>
            </li>
        </ul>
    </div>
    <div class="card text-black md:w-[720px] w-[320px]">
        <form method="POST" action="{{ url('pets/'.$pet->id) }}" class="flex flex-col md:flex-row gap-4 mt-4"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="w-full md:w-[320px]">
                <div
                    class="avatar flex flex-col gap-2 items-center justify-center cursor-pointer hover:scale-110 transition ease-in">
                    <div id="upload" class="mask mask-squircle w-48">
                        <img id="preview" src="{{ asset('images/' . $pet->image) }}" />
                    </div>
                    <small class="text-white pb-0 border-white border-b flex gap-1 items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="currentColor" viewBox="0 0 256 256">
                            <path
                                d="M168,136a8,8,0,0,1-8,8H136v24a8,8,0,0,1-16,0V144H96a8,8,0,0,1,0-16h24V104a8,8,0,0,1,16,0v24h24A8,8,0,0,1,168,136Zm64-56V192a24,24,0,0,1-24,24H48a24,24,0,0,1-24-24V80A24,24,0,0,1,48,56H75.72L87,39.12A16,16,0,0,1,100.28,32h55.44A16,16,0,0,1,169,39.12L180.28,56H208A24,24,0,0,1,232,80Zm-16,0a8,8,0,0,0-8-8H176a8,8,0,0,1-6.66-3.56L155.72,48H100.28L86.66,68.44A8,8,0,0,1,80,72H48a8,8,0,0,0-8,8V192a8,8,0,0,0,8,8H208a8,8,0,0,0,8-8Z">
                            </path>
                        </svg>
                        Upload Photo
                    </small>
                    @error('image')
                        <small class="badge badge-error w-full -mt-1 text-xs py-4">{{ $message }}</small>
                    @enderror
                </div>
                <input type="file" id="image" name="image" class="hidden" accept="image/*">
                <input type="hidden" name="originimage" value="{{ $pet->image }}">
            </div>
            <div class="w-full md:w-[320px]">
                {{-- name --}}
                <label class="label text-white">Name Pet</label>
                <input type="text" class="input bg-[#fff]" name="name" placeholder="Name Pet"
                    value="{{ $pet->name }}" />
                @error('document')
                    <small class="badge badge-error w-full -mt-1 text-xs py-4">{{ $message }}</small>
                @enderror

                {{-- Kind --}}
                <label class="label text-white">Kind</label>
                <select name="kind" class="select bg-[#fff] outline-0">
                    <option value="">Select...</option>
                    <option value="Cat" @if ($pet->kind) == 'Cat') selected @endif>Cat</option>
                    <option value="Dog" @if ($pet->kind) == 'Dog') selected @endif>Dog</option>
                    <option value="Bird" @if ($pet->kind) == 'Bird') selected @endif>Bird</option>
                    <option value="Pig" @if ($pet->kind) == 'Pig') selected @endif>Pig</option>
                </select>
                @error('kind')
                    <small class="badge badge-error w-full -mt-1 text-xs py-4">{{ $message }}</small>
                @enderror


                {{-- Weight --}}
                <label class="label text-white">Weight</label>
                <input type="number" step="0.01" class="input bg-[#fff]" name="weight" placeholder="Exact Weight"
                    value="{{ $pet->weight }}" />
                @error('weight')
                    <small class="badge badge-error w-full -mt-1 text-xs py-4">{{ $message }}</small>
                @enderror

                {{-- Age --}}
                <label class="label text-white">Age</label>
                <input type="number" class="input bg-[#fff]" name="age" placeholder="Approximate Age"
                    value="{{ $pet->age }}" />
                @error('age')
                    <small class="badge badge-error w-full -mt-1 text-xs py-4">{{ $message }}</small>
                @enderror
            </div>

            <div class="w-full md:w-[320px]">
                {{-- Breed --}}
                <label class="label text-white">Breed</label>
                <input type="text" class="input bg-[#fff]" name="breed" placeholder="Breed" 
                    value="{{ $pet->breed }}" />
                @error('breed')
                    <small class="badge badge-error w-full -mt-1 text-xs py-4">{{ $message }}</small>
                @enderror

                {{-- Location --}}
                <label class="label text-white">Location</label>
                <input type="text" class="input bg-[#fff]" name="location" placeholder="Location Pet"
                    value="{{ $pet->location }}" />
                @error('location')
                    <small class="badge badge-error w-full -mt-1 text-xs py-4">{{ $message }}</small>
                @enderror

                {{-- Description --}}
                <label class="label text-white">Description</label>
                <input type="text" class="input bg-[#fff]" name="description" placeholder="description pet" 
                    value="{{ $pet->description }}" />
                @error('description')
                    <small class="badge badge-error w-full -mt-1 text-xs py-4">{{ $message }}</small>
                @enderror

                <button class="btn btn-outline btn-success hover:text-white mt-4 w-full">Edit</button>
            </div>
        </form>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $('#upload').click(function (e) {
                e.preventDefault();
                $('#image').click();
            })
            $('#image').change(function (e) {
                $('#preview').attr('src', window.URL.createObjectURL($(this).prop('files')[0]))
            })
        })
    </script>

@endsection