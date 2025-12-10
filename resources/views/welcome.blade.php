@extends('layouts.home')

@section('title', 'Welcome: Larapets🐾')

@section('content')
    <section class="bg-[#0009] rounded-lg w-96 p-8 flex flex-col gap-4 items-center justify-center">
        <img src=" {{ asset('images/logo.png') }}" width="260px" alt="logo">
        <p class="text-white">
            Adoptar no solo cambia la vida de un animal… también transforma la tuya. Descubrirás la lealtad más pura, una compañía incondicional y la alegría de saber que diste una nueva oportunidad a quien más la necesitaba.

            🌼 Cuando adoptas, no salvas solo una vida, llenas tu hogar de amor, alegría y gratitud.
            💛 Cada adopción es una historia de esperanza.

            Anímate a dar el paso. El amor no se compra… se adopta.
        </p>
        <div class="flex gap-2 mt-8 text-white">
        @guest()
            <a class="btn btn-outline w-[160px]" href="{{ url('login') }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="currentColor" viewBox="0 0 256 256"><path d="M144,157.68a68,68,0,1,0-71.9,0c-20.65,6.76-39.23,19.39-54.17,37.17a8,8,0,0,0,12.25,10.3C50.25,181.19,77.91,168,108,168s57.75,13.19,77.87,37.15a8,8,0,0,0,12.25-10.3C183.18,177.07,164.6,164.44,144,157.68ZM56,100a52,52,0,1,1,52,52A52.06,52.06,0,0,1,56,100Zm197.66,33.66-32,32a8,8,0,0,1-11.32,0l-16-16a8,8,0,0,1,11.32-11.32L216,148.69l26.34-26.35a8,8,0,0,1,11.32,11.32Z"></path></svg>
                Login
            </a>
            <a class="btn btn-outline w-[160px]" href="{{ url('register') }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="currentColor" viewBox="0 0 256 256"><path d="M256,136a8,8,0,0,1-8,8H232v16a8,8,0,0,1-16,0V144H200a8,8,0,0,1,0-16h16V112a8,8,0,0,1,16,0v16h16A8,8,0,0,1,256,136Zm-57.87,58.85a8,8,0,0,1-12.26,10.3C165.75,181.19,138.09,168,108,168s-57.75,13.19-77.87,37.15a8,8,0,0,1-12.25-10.3c14.94-17.78,33.52-30.41,54.17-37.17a68,68,0,1,1,71.9,0C164.6,164.44,183.18,177.07,198.13,194.85ZM108,152a52,52,0,1,0-52-52A52.06,52.06,0,0,0,108,152Z"></path></svg>
                Register
            </a>
        @endguest
        @auth()
        <a class="btn btn-outline w-[160px]" href="{{ url('dashboard') }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="currentColor" viewBox="0 0 256 256"><path d="M32,64a8,8,0,0,1,8-8H216a8,8,0,0,1,0,16H40A8,8,0,0,1,32,64Zm8,72h64a8,8,0,0,0,0-16H40a8,8,0,0,0,0,16Zm80,48H40a8,8,0,0,0,0,16h80a8,8,0,0,0,0-16Zm128-40c0,36.52-50.28,62.08-52.42,63.16a8,8,0,0,1-7.16,0C186.28,206.08,136,180.52,136,144a32,32,0,0,1,56-21.14A32,32,0,0,1,248,144Zm-16,0a16,16,0,0,0-32,0,8,8,0,0,1-16,0,16,16,0,0,0-32,0c0,20.18,26.21,39.14,40,46.93C205.79,183.15,232,164.19,232,144Z"></path></svg>                Dashboard
        </a>
        @endauth
    </div>
    </section>
@endsection