@extends('layouts.dashboard')

@section('title', 'My Profile: Larapets 🙀')

@section('content')
    <h1 class="text-4xl text-black flex gap-2 items-center justify-center pb-4 border-neutra-50 mb-10">
        <svg xmlns="http://www.w3.org/2000/svg" class="size-12" fill="currentColor" viewBox="0 0 256 256">
            <path
                d="M144,157.68a68,68,0,1,0-71.9,0c-20.65,6.76-39.23,19.39-54.17,37.17a8,8,0,1,0,12.24,10.3C50.25,181.19,77.91,168,108,168s57.75,13.19,77.87,37.15a8,8,0,0,0,12.26-10.3C183.18,177.07,164.6,164.44,144,157.68ZM56,100a52,52,0,1,1,52,52A52.06,52.06,0,0,1,56,100Zm196.25,43.07-4.66-2.69a23.6,23.6,0,0,0,0-8.76l4.66-2.69a8,8,0,1,0-8-13.86l-4.67,2.7a23.92,23.92,0,0,0-7.58-4.39V108a8,8,0,0,0-16,0v5.38a23.92,23.92,0,0,0-7.58,4.39l-4.67-2.7a8,8,0,1,0-8,13.86l4.66,2.69a23.6,23.6,0,0,0,0,8.76l-4.66,2.69a8,8,0,0,0,8,13.86l4.67-2.7a23.92,23.92,0,0,0,7.58,4.39V164a8,8,0,0,0,16,0v-5.38a23.92,23.92,0,0,0,7.58-4.39l4.67,2.7a7.92,7.92,0,0,0,4,1.07,8,8,0,0,0,4-14.93ZM216,136a8,8,0,1,1,8,8A8,8,0,0,1,216,136Z">
            </path>
        </svg>
        My Profile
    </h1>
    {{-- Breadcrumbs --}}
    <div class="breadcrumbs text-sm text-black">
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
                            d="M144,157.68a68,68,0,1,0-71.9,0c-20.65,6.76-39.23,19.39-54.17,37.17a8,8,0,1,0,12.24,10.3C50.25,181.19,77.91,168,108,168s57.75,13.19,77.87,37.15a8,8,0,0,0,12.26-10.3C183.18,177.07,164.6,164.44,144,157.68ZM56,100a52,52,0,1,1,52,52A52.06,52.06,0,0,1,56,100Zm196.25,43.07-4.66-2.69a23.6,23.6,0,0,0,0-8.76l4.66-2.69a8,8,0,1,0-8-13.86l-4.67,2.7a23.92,23.92,0,0,0-7.58-4.39V108a8,8,0,0,0-16,0v5.38a23.92,23.92,0,0,0-7.58,4.39l-4.67-2.7a8,8,0,1,0-8,13.86l4.66,2.69a23.6,23.6,0,0,0,0,8.76l-4.66,2.69a8,8,0,0,0,8,13.86l4.67-2.7a23.92,23.92,0,0,0,7.58,4.39V164a8,8,0,0,0,16,0v-5.38a23.92,23.92,0,0,0,7.58-4.39l4.67,2.7a7.92,7.92,0,0,0,4,1.07,8,8,0,0,0,4-14.93ZM216,136a8,8,0,1,1,8,8A8,8,0,0,1,216,136Z">
                        </path>
                    </svg>
                    My Profile
                </span>
            </li>
        </ul>
    </div>
    <div class="card text-black md:w-[720px] w-[320px]">
        <form method="POST" action="{{ url('myprofile/' . $user->id) }}" class="flex flex-col md:flex-row gap-4 mt-4"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="w-full md:w-[320px]">
                <div
                    class="avatar flex flex-col gap-2 items-center justify-center cursor-pointer hover:scale-110 transition ease-in">
                    <div id="upload" class="mask mask-squircle w-48">
                        <img id="preview" src="{{ asset('images/' . $user->photo) }}" />
                    </div>
                    <small class="text-white pb-0 border-white border-b flex gap-1 items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="currentColor" viewBox="0 0 256 256">
                            <path
                                d="M168,136a8,8,0,0,1-8,8H136v24a8,8,0,0,1-16,0V144H96a8,8,0,0,1,0-16h24V104a8,8,0,0,1,16,0v24h24A8,8,0,0,1,168,136Zm64-56V192a24,24,0,0,1-24,24H48a24,24,0,0,1-24-24V80A24,24,0,0,1,48,56H75.72L87,39.12A16,16,0,0,1,100.28,32h55.44A16,16,0,0,1,169,39.12L180.28,56H208A24,24,0,0,1,232,80Zm-16,0a8,8,0,0,0-8-8H176a8,8,0,0,1-6.66-3.56L155.72,48H100.28L86.66,68.44A8,8,0,0,1,80,72H48a8,8,0,0,0-8,8V192a8,8,0,0,0,8,8H208a8,8,0,0,0,8-8Z">
                            </path>
                        </svg>
                        Upload Photo
                    </small>
                    @error('photo')
                        <small class="badge badge-error w-full -mt-1 text-xs py-4">{{ $message }}</small>
                    @enderror
                </div>
                <input type="file" id="photo" name="photo" class="hidden" accept="image/*">
                <input type="hidden" name="originphoto" value="{{ $user->photo }}">
            </div>
            <div class="w-full md:w-[320px]">
                {{-- Document --}}
                <label class="label text-white">Document</label>
                <input type="number" class="input bg-[#fff]" name="document" placeholder="123456789"
                    value="{{ $user->document }}" />
                @error('document')
                    <small class="badge badge-error w-full -mt-1 text-xs py-4">{{ $message }}</small>
                @enderror

                {{-- Fullname --}}
                <label class="label text-white">Full Name</label>
                <input type="text" class="input bg-[#fff]" name="fullname" placeholder="Jeremias Springfield"
                    value="{{ $user->fullname }}" />
                @error('fullname')
                    <small class="badge badge-error w-full -mt-1 text-xs py-4">{{ $message }}</small>
                @enderror

                {{-- Gender --}}
                <label class="label text-white">Gender</label>
                <select name="gender" class="select bg-[#fff] outline-0">
                    <option value="">Select...</option>
                    <option value="Female" @if ($user->gender == 'Female') selected @endif>Female</option>
                    <option value="Male" @if ($user->gender == 'Male') selected @endif>Male</option>
                </select>
                @error('gender')
                    <small class="badge badge-outline badge-error w-full mt-1 text-xs py-4">{{ $message }}</small>
                @enderror
            </div>

            <div class="w-full md:w-[320px]">
                {{-- Birthdate --}}
                <label class="label text-white">Birthdate</label>
                <input type="date" class="input bg-[#fff]" name="birthdate" placeholder="1983-06-16"
                    value="{{ $user->birthdate }}" />
                @error('birthdate')
                    <small class="badge badge-error w-full -mt-1 text-xs py-4">{{ $message }}</small>
                @enderror

                {{-- phone --}}
                <label class="label text-white">Phone</label>
                <input type="number" class="input bg-[#fff]" name="phone" placeholder="3204456321"
                    value="{{ $user->phone }}" />
                @error('phone')
                    <small class="badge badge-error w-full -mt-1 text-xs py-4">{{ $message }}</small>
                @enderror

                <label class="label text-white">Email</label>
                <input type="text" class="input bg-[#fff]" name="email" placeholder="Email" value="{{ $user->email }}" />
                @error('email')
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
                $('#photo').click();
            })
            $('#photo').change(function (e) {
                $('#preview').attr('src', window.URL.createObjectURL($(this).prop('files')[0]))
            })
        })
    </script>

@endsection