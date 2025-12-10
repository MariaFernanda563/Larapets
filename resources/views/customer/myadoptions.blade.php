@extends('layouts.dashboard')

@section('tittle', 'My Adoptions: Larapets 🙀')

@section('content')
    <h1 class="text-4xl text-black flex gap-2 items-center justify-center pb-4 border-neutra-50 mb-10">
        <svg xmlns="http://www.w3.org/2000/svg" class="size-12" fill="currentColor" viewBox="0 0 256 256">
            <path
                d="M178,40c-20.65,0-38.73,8.88-50,23.89C116.73,48.88,98.65,40,78,40a62.07,62.07,0,0,0-62,62c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,228.66,240,172,240,102A62.07,62.07,0,0,0,178,40ZM128,214.8C109.74,204.16,32,155.69,32,102A46.06,46.06,0,0,1,78,56c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,155.61,146.24,204.15,128,214.8Z">
            </path>
        </svg>
        My Adoptions
    </h1>

    {{-- Breadcrumbs --}}
    <div class="breadcrumbs text-black">
        <ul>
            <li>
                <a href="{{ url('dashboard') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="currentColor" viewBox="0 0 256 256">
                        <path
                            d="M180,144H160V112h20a36,36,0,1,0-36-36V96H112V76a36,36,0,1,0-36,36H96v32H76a36,36,0,1,0,36,36V160h32v20a36,36,0,1,0,36-36ZM160,76a20,20,0,1,1,20,20H160ZM56,76a20,20,0,0,1,40,0V96H76A20,20,0,0,1,56,76ZM96,180a20,20,0,1,1-20-20H96Zm16-68h32v32H112Zm68,88a20,20,0,0,1-20-20V160h20a20,20,0,0,1,0,40Z">
                        </path>
                    </svg>
                    Dashboard
                </a>
            </li>
            <li>
                <span class="inline-flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="currentColor" viewBox="0 0 256 256">
                        <path
                            d="M178,40c-20.65,0-38.73,8.88-50,23.89C116.73,48.88,98.65,40,78,40a62.07,62.07,0,0,0-62,62c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,228.66,240,172,240,102A62.07,62.07,0,0,0,178,40ZM128,214.8C109.74,204.16,32,155.69,32,102A46.06,46.06,0,0,1,78,56c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,155.61,146.24,204.15,128,214.8Z">
                        </path>
                    </svg>
                    My Adoptions
                </span>
            </li>
        </ul>
    </div>

    <div class="datalist flex justify-center items-center flex-col gap-4">

        @forelse ($adopts as $adopt)
            <div class="avatar-group -space-x-6">
                <div class="avatar">
                    <div class="w-36">
                        <img src="{{ asset('images/' . $adopt->user->photo)}}" />
                    </div>
                </div>
                <div class="avatar">
                    <div class="w-36">
                        <img src="{{ asset('images/' . $adopt->pet->image)}}" />
                    </div>
                </div>
            </div>
            <h4 class="text-black">
                <span class="underline font-bold">{{ $adopt->pet->name }}</span>
                Was adopted by
                <span class="underline font-bold">{{ $adopt->user->fullname }}</span>
                {{ $adopt->created_at->diffforhumans() }}
            </h4>
            <a href="{{ url('myadoptions/' . $adopt->id) }}" class="btn btn-info">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="currentColor" viewBox="0 0 256 256">
                    <path
                        d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z">
                    </path>
                </svg>
                Show more
            </a>
            <span class="border-b-1 border-dashed mt-8 border-[#fff6] h-2 w-4/12"></span>
        @empty
            <p class="text-center my-20 text-black">No Adoptions Yet!</p>
        @endforelse
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
@section('js')
    <script>
        $(document).ready(function () {
            //Modal
            const modal_error = document.getElementById('modal_message');
            @if (session('error'))
                modal_error.showModal();
            @endif
                const modal_message = document.getElementById('modal_message');
            @if (session('message'))
                modal_message.showModal();
            @endif
            });
    </script>
@endsection