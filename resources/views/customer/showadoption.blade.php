@extends('layouts.dashboard')

@section('title', 'Show Adoptions: 🙀')

@section('content')
<h1 class="text-4xl text-white flex gap-2 items-center justify-center pb-4 border-b-2 border-white">Show adoption
    <svg xmlns="http://www.w3.org/2000/svg" class="size-12" fill="currentColor" viewBox="0 0 256 256">
        <path
            d="M247.31,124.76c-.35-.79-8.82-19.58-27.65-38.41C194.57,61.26,162.88,48,128,48S61.43,61.26,36.34,86.35C17.51,105.18,9,124,8.69,124.76a8,8,0,0,0,0,6.5c.35.79,8.82,19.57,27.65,38.4C61.43,194.74,93.12,208,128,208s66.57-13.26,91.66-38.34c18.83-18.83,27.3-37.61,27.65-38.4A8,8,0,0,0,247.31,124.76ZM128,192c-30.78,0-57.67-11.19-79.93-33.25A133.47,133.47,0,0,1,25,128,133.33,133.33,0,0,1,48.07,97.25C70.33,75.19,97.22,64,128,64s57.67,11.19,79.93,33.25A133.46,133.46,0,0,1,231.05,128C223.84,141.46,192.43,192,128,192Zm0-112a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Z">
        </path>
    </svg>
</h1>

{{-- breadcrums --}}
<div class="breadcrumbs text-sm flex justify-center text-white">
    <ul>
        <li>
            <a href="{{ url('dashboard') }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="white" viewBox="0 0 256 256">
                    <path
                        d="M227.31,73.37,182.63,28.68a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM92.69,208H48V163.31l88-88L180.69,120ZM192,108.68,147.31,64l24-24L216,84.68Z">
                    </path>
                </svg>
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{ url('myadoptions') }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="white" viewBox="0 0 256 256">
                    <path
                        d="M230.33,141.06a24.34,24.34,0,0,0-18.61-4.77C230.5,117.33,240,98.48,240,80c0-26.47-21.29-48-47.46-48A47.58,47.58,0,0,0,156,48.75,47.58,47.58,0,0,0,119.46,32C93.29,32,72,53.53,72,80c0,11,3.24,21.69,10.06,33a31.87,31.87,0,0,0-14.75,8.4L44.69,144H16A16,16,0,0,0,0,160v40a16,16,0,0,0,16,16H120a7.93,7.93,0,0,0,1.94-.24l64-16a6.94,6.94,0,0,0,1.19-.4L226,182.82l.44-.2a24.6,24.6,0,0,0,3.93-41.56ZM119.46,48A31.15,31.15,0,0,1,148.6,67a8,8,0,0,0,14.8,0,31.15,31.15,0,0,1,29.14-19C209.59,48,224,62.65,224,80c0,19.51-15.79,41.58-45.66,63.9l-11.09,2.55A28,28,0,0,0,140,112H100.68C92.05,100.36,88,90.12,88,80,88,62.65,102.41,48,119.46,48ZM16,160H40v40H16Zm203.43,8.21-38,16.18L119,200H56V155.31l22.63-22.62A15.86,15.86,0,0,1,89.94,128H140a12,12,0,0,1,0,24H112a8,8,0,0,0,0,16h32a8.32,8.32,0,0,0,1.79-.2l67-15.41.31-.08a8.6,8.6,0,0,1,6.3,15.9Z">
                    </path>
                </svg>
                My Adoptions
            </a>
        </li>
    </ul>
</div>

{{-- Card --}}

<div class="bg-[#000000c2] p-10 rounded-sm flex justify-center items-center flex-col">
    <div class="avatar-group m-8 -space-x-6">
        <div class="avatar border-black">
            <div class="w-36">
                <img src="{{ asset('images/' . $adopt->user->photo) }}" />
            </div>
        </div>
        <div class="avatar border-black">
            <div class="w-36">
                <img src="{{ asset('images/' . $adopt->pet->image) }}" />
            </div>
        </div>
    </div>
    <div class="flex gap-2 flex-col md:flex-row">
        <ul class="list bg-[#ffffff18] mt-4 text-white text-center rounded-box shadow-md w-64">
            <li class="list-row">
                <span class="text-[#ffffffe1] font-semibold">Document:</span><span>{{ $adopt->user->document }}</span> 
            </li>
            <li class="list-row">
                <span class="text-[#ffffffe1] font-semibold">FullName:</span><span>{{ $adopt->user->fullname }}</span> 
            </li>
            <li class="list-row">
                <span class="text-[#ffffffe1] font-semibold">Gender:</span><span>{{ $adopt->user->gender }}</span> 
            </li>
            <li class="list-row">
                <span class="text-[#ffffffe1] font-semibold">BirthDate:</span><span>{{Carbon\Carbon::parse( $adopt->user->birthdate)->age }}</span> 
            </li>                
            <li class="list-row">
                <span class="text-[#ffffffe1] font-semibold">Phone:</span><span>{{ $adopt->user->phone }}</span> 
            </li>
            <li class="list-row">
                <span class="text-[#ffffffe1] font-semibold">Email:</span><span>{{ $adopt->user->email }}</span> 
            </li>
            <li class="list-row">
                <span class="text-[#ffffffe1] font-semibold">Active:</span>
                <span>
                    @if ($adopt->user->active == 1)
                        <div class="badge badge-outline badge-success">Active</div>
                    @else
                        <div class="badge badge-outline badge-error">Inactive</div>
                    @endif
                </span> 
            </li>
            <li class="list-row">
                <span class="text-[#ffffffe1] font-semibold">Role:</span>
                <span>
                    @if ($adopt->user->role == 'Administrator')
                        <div class="badge badge-outline badge-warning">Admin</div>
                    @else
                        <div class="badge badge-outline badge-default">Customer</div>
                    @endif
                </span> 
            </li>
        </ul>
        <ul class="list bg-[#ffffff18] mt-4 text-white text-center rounded-box shadow-md w-64">
            <li class="list-row">
                <span class="text-[#fff9] font-semibold">Name:</span> <span>{{ $adopt->pet->name }}</span>
            </li>
            <li class="list-row">
                <span class="text-[#fff9] font-semibold">Kind:</span> <span>{{ $adopt->pet->kind }}</span>
            </li>
            <li class="list-row">
                <span class="text-[#fff9] font-semibold">Weight:</span> <span>{{ $adopt->pet->weight }} kg</span>
            </li>
            <li class="list-row">
                <span class="text-[#fff9] font-semibold">Age:</span> <span>{{ $adopt->pet->age }} Years</span>
            </li>
            <li class="list-row">
                <span class="text-[#fff9] font-semibold">Breed:</span> <span>{{ $adopt->pet->breed }}</span>
            </li>
            <li class="list-row">
                <span class="text-[#fff9] font-semibold">Location:</span> <span>{{ $adopt->pet->location }}</span>
            </li>
            <li class="list-row">
                <span class="text-[#fff9] font-semibold">Status:</span> <span>@if($adopt->pet->active == 1)
                    <div class="badge badge-outline badge-success">Active</div>
                    @else
                    <div class="badge badge-soft badge-error w-full">Inactive</div>
                    @endif
                </span>
            </li>
            <li class="list-row">
                <span class="text-[#fff9] font-semibold">Adoption:</span> <span>@if($adopt->pet->status == '1')
                    <div class="badge badge-outline badge-default">Adopted</div>
                    @else
                    <div class="badge badge-soft badge-primary w-full">No Adopted</div>
                    @endif
                </span>
            </li>
        </ul>
    </div>
</div>
@endsection