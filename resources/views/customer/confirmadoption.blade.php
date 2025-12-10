@extends('layouts.dashboard')

@section('title', 'Confirm Adoption: 🙀')

@section('content')
    <h1 class="text-4xl text-black flex gap-2 items-center justify-center pb-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="size-10" fill="currentColor" viewBox="0 0 256 256">
            <path
                d="M111.49,52.63a15.8,15.8,0,0,0-26,5.77L33,202.78A15.83,15.83,0,0,0,47.76,224a16,16,0,0,0,5.46-1l144.37-52.5a15.8,15.8,0,0,0,5.78-26Zm-8.33,135.21-35-35,13.16-36.21,58.05,58.05Zm-55,20,14-38.41,24.45,24.45ZM156,168.64,87.36,100l13-35.87,91.43,91.43ZM160,72a37.8,37.8,0,0,1,3.84-15.58C169.14,45.83,179.14,40,192,40c6.7,0,11-2.29,13.65-7.21A22,22,0,0,0,208,23.94,8,8,0,0,1,224,24c0,12.86-8.52,32-32,32-6.7,0-11,2.29-13.65,7.21A22,22,0,0,0,176,72.06,8,8,0,0,1,160,72ZM136,40V16a8,8,0,0,1,16,0V40a8,8,0,0,1-16,0Zm101.66,82.34a8,8,0,1,1-11.32,11.31l-16-16a8,8,0,0,1,11.32-11.32Zm4.87-42.75-24,8a8,8,0,0,1-5.06-15.18l24-8a8,8,0,0,1,5.06,15.18Z">
            </path>
        </svg>
        Confirm Adoption
    </h1>

    {{-- breadcrums --}}
    <div class="breadcrumbs text-sm flex justify-center text-black">
        <ul>
            <li>
                <a href="{{ url('dashboard') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="currentColor" viewBox="0 0 256 256">
                        <path
                            d="M180,144H160V112h20a36,36,0,1,0-36-36V96H112V76a36,36,0,1,0-36,36H96v32H76a36,36,0,1,0,36,36V160h32v20a36,36,0,1,0,36-36ZM160,76a20,20,0,1,1,20,20H160ZM56,76a20,20,0,0,1,40,0V96H76A20,20,0,0,1,56,76ZM96,180a20,20,0,1,1-20-20H96Zm16-68h32v32H112Zm68,88a20,20,0,0,1-20-20V160h20a20,20,0,0,1,0,40Z">
                        </path>
                    </svg>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{ url('makeadoption') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="currentColor" viewBox="0 0 256 256">
                        <path
                            d="M230.33,141.06a24.34,24.34,0,0,0-18.61-4.77C230.5,117.33,240,98.48,240,80c0-26.47-21.29-48-47.46-48A47.58,47.58,0,0,0,156,48.75,47.58,47.58,0,0,0,119.46,32C93.29,32,72,53.53,72,80c0,11,3.24,21.69,10.06,33a31.87,31.87,0,0,0-14.75,8.4L44.69,144H16A16,16,0,0,0,0,160v40a16,16,0,0,0,16,16H120a7.93,7.93,0,0,0,1.94-.24l64-16a6.94,6.94,0,0,0,1.19-.4L226,182.82l.44-.2a24.6,24.6,0,0,0,3.93-41.56ZM119.46,48A31.15,31.15,0,0,1,148.6,67a8,8,0,0,0,14.8,0,31.15,31.15,0,0,1,29.14-19C209.59,48,224,62.65,224,80c0,19.51-15.79,41.58-45.66,63.9l-11.09,2.55A28,28,0,0,0,140,112H100.68C92.05,100.36,88,90.12,88,80,88,62.65,102.41,48,119.46,48ZM16,160H40v40H16Zm203.43,8.21-38,16.18L119,200H56V155.31l22.63-22.62A15.86,15.86,0,0,1,89.94,128H140a12,12,0,0,1,0,24H112a8,8,0,0,0,0,16h32a8.32,8.32,0,0,0,1.79-.2l67-15.41.31-.08a8.6,8.6,0,0,1,6.3,15.9Z">
                        </path>
                    </svg>
                    Make Adoption
                </a>
            </li>
            <li>
                <a href="{{ url('confirmadoption') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="currentColor" viewBox="0 0 256 256">
                        <path
                            d="M111.49,52.63a15.8,15.8,0,0,0-26,5.77L33,202.78A15.83,15.83,0,0,0,47.76,224a16,16,0,0,0,5.46-1l144.37-52.5a15.8,15.8,0,0,0,5.78-26Zm-8.33,135.21-35-35,13.16-36.21,58.05,58.05Zm-55,20,14-38.41,24.45,24.45ZM156,168.64,87.36,100l13-35.87,91.43,91.43ZM160,72a37.8,37.8,0,0,1,3.84-15.58C169.14,45.83,179.14,40,192,40c6.7,0,11-2.29,13.65-7.21A22,22,0,0,0,208,23.94,8,8,0,0,1,224,24c0,12.86-8.52,32-32,32-6.7,0-11,2.29-13.65,7.21A22,22,0,0,0,176,72.06,8,8,0,0,1,160,72ZM136,40V16a8,8,0,0,1,16,0V40a8,8,0,0,1-16,0Zm101.66,82.34a8,8,0,1,1-11.32,11.31l-16-16a8,8,0,0,1,11.32-11.32Zm4.87-42.75-24,8a8,8,0,0,1-5.06-15.18l24-8a8,8,0,0,1,5.06,15.18Z">
                        </path>
                    </svg>
                    Confirm Adoption
                </a>
            </li>
        </ul>
    </div>

    <div class="bg-[#0009] p-10 rounded-sm">
        {{-- -Photo --}}
        <div
            class="avatar flex flex-col gap-2 items-center justify-center cursor-pointer hover:scale-110 transition ease-in">
            <div class="mask mask-squircle w-60">
                <img src="{{ asset('images/' . ($pet->photo ?? $pet->image ?? 'no-image.png')) }}" alt="{{ $pet->name }}" />
            </div>
        </div>
        {{-- -Data --}}
        <div class="flex gap-2 flex-col md:flex-row">
            <ul class="list bg-[#0009] mt-4 text-white rounded-box shadow-md">
                <li class="list-row">
                    <span class="text-[#fff9] font-semibold">Name</span> <span> {{ $pet->name }}</span>
                </li>
                <li class="list-row">
                    <span class="text-[#fff9] font-semibold">Kind</span> <span class="text-[#fff9]">
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
                        {{ $pet->weight ?? 'N/A' }} Kg</span>
                </li>
                <li class="list-row">
                    <span class="text-[#fff9] font-semibold">Age</span> <span class="text-[#fff9]">
                        {{ $pet->age ?? 'N/A' }} Years</span>
                </li>
            </ul>

            <ul class="list bg-[#0009] mt-4 text-white rounded-box shadow-md">
                <li class="list-row">
                    <span class="text-[#fff9] font-semibold">Breed</span> <span class="text-[#fff9]">
                        {{ $pet->breed ?? 'N/A' }}</span>
                </li>
                <li class="list-row">
                    <span class="text-[#fff9] font-semibold">Location</span> <span> {{ $pet->location ?? 'N/A' }}</span>
                </li>
                <li class="list-row">
                    <span class="text-[#fff9] font-semibold">Description</span> <span>
                        {{ $pet->description ?? 'No description' }}</span>
                </li>
                <li class="list-row">
                    @if ($pet->active == 1)
                        <div class="badge badge-outline badge-success">Active</div>
                    @else
                        <div class="badge badge-outline badge-error">Inactive</div>
                    @endif
                </li>
                <li class="list-row mt-4">
                    <form method="POST" action="{{ url('makeadoption/' . $pet->id) }}" class="w-full">
                        @csrf
                        <button class="btn btn-secondary w-full">Adopt this pet</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
    <dialog id="modal_message" class="modal">
        <div class="modal-box bg-black text-white">
            <h3 class="text-lg font-bold">
                Congratulations!
            </h3>
            <div role="alert" class="alert alert-success">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>{{ session('message') }}</span>
            </div>
        </div>
    </dialog>

@endsection